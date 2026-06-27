#!/usr/bin/env python3
"""Convert wiki/en/1_6 blade.php files to Markdown files in docs/en/1.6/."""

import os
import re
import sys
from pathlib import Path

try:
    from markdownify import markdownify as md
except ImportError:
    print("Please install markdownify: pip install markdownify")
    sys.exit(1)

REPO_ROOT = Path(__file__).parent
SRC_DIR = REPO_ROOT / "wiki" / "en" / "1_6"
OUT_DIR = REPO_ROOT / "docs" / "en" / "1.6"

# Blade source file → output markdown path (relative to OUT_DIR)
FILE_MAP = {
    "root.blade.php": "index.md",
    "getting_started.blade.php": "getting-started/index.md",
    "modules.blade.php": "modules/index.md",
    "settings.blade.php": "settings/index.md",
    "system.blade.php": "system/index.md",
    "templates.blade.php": "templates/index.md",
    "general/about.blade.php": "general/about.md",
    "general/changelog.blade.php": "general/changelog.md",
    "general/faq.blade.php": "general/faq.md",
    "general/license.blade.php": "general/license.md",
    "getting_started/installation.blade.php": "getting-started/installation.md",
    "getting_started/quickstart.blade.php": "getting-started/quickstart.md",
    "getting_started/requirements.blade.php": "getting-started/requirements.md",
    "getting_started/updating_ip.blade.php": "getting-started/updating-ip.md",
    "help/setup_cron.blade.php": "help/setup-cron.md",
    "modules/clients.blade.php": "modules/clients.md",
    "modules/invoices.blade.php": "modules/invoices.md",
    "modules/payments.blade.php": "modules/payments.md",
    "modules/quotes.blade.php": "modules/quotes.md",
    "modules/recurring_invoices.blade.php": "modules/recurring-invoices.md",
    "modules/tasks_projects.blade.php": "modules/tasks-projects.md",
    "settings/custom_fields.blade.php": "settings/custom-fields.md",
    "settings/email.blade.php": "settings/email.md",
    "settings/email_templates.blade.php": "settings/email-templates.md",
    "settings/general.blade.php": "settings/general.md",
    "settings/invoice_groups.blade.php": "settings/invoice-groups.md",
    "settings/invoices.blade.php": "settings/invoices.md",
    "settings/online_payments.blade.php": "settings/online-payments.md",
    "settings/payment_methods.blade.php": "settings/payment-methods.md",
    "settings/quotes.blade.php": "settings/quotes.md",
    "settings/taxes.blade.php": "settings/taxes.md",
    "settings/taxrates.blade.php": "settings/taxrates.md",
    "settings/updatecheck.blade.php": "settings/updatecheck.md",
    "settings/user_accounts.blade.php": "settings/user-accounts.md",
    "system/importing_data.blade.php": "system/importing-data.md",
    "system/translation_localization.blade.php": "system/translation-localization.md",
    "system/upgrade_from_fusioninvoice.blade.php": "system/upgrade-from-fusioninvoice.md",
    "templates/customize_templates.blade.php": "templates/customize-templates.md",
    "templates/using_templates.blade.php": "templates/using-templates.md",
}


def extract_title(content: str) -> str:
    m = re.search(r"@section\('title'\)\s*(.*?)\s*@endsection", content, re.DOTALL)
    if m:
        return m.group(1).strip()
    return ""


def extract_body(content: str) -> str:
    m = re.search(r"@section\('content'\)(.*?)@stop", content, re.DOTALL)
    if m:
        return m.group(1).strip()
    return ""


def demote_headings(html: str) -> str:
    """Shift h3→h2, h4→h3, h5→h4 in a single pass (h2.page-title already stripped)."""
    def _open(m):
        lvl = int(m.group(1))
        return f'<h{max(1, lvl - 1)}{m.group(2)}'

    def _close(m):
        lvl = int(m.group(1))
        return f'</h{max(1, lvl - 1)}>'

    html = re.sub(r'<h([3-6])([ >])', _open, html, flags=re.IGNORECASE)
    html = re.sub(r'</h([3-6])>', _close, html, flags=re.IGNORECASE)
    return html


def preprocess(html: str) -> str:
    # Remove PHP comment blocks
    html = re.sub(r"<\?php\s*//[^\?]*\?>", "", html)

    # Remove IP::headlineLink calls (PHP echo)
    html = re.sub(r"<\?=\s*IP::headlineLink\([^)]+\);\s*\?>", "", html)

    # Remove PHP trans() calls
    html = re.sub(r"<\?php\s+echo\s+trans\([^)]+\)\s+\?>", "", html)

    # Remove entire PHP blocks (article_pagination arrays, etc.)
    html = re.sub(r"<\?php\b.*?\?>", "", html, flags=re.DOTALL)

    # Convert Blade url() helper to plain URL
    html = re.sub(r"\{\{\s*url\('([^']+)'\)\s*\}\}", r"/\1", html)

    # Convert Blade date() helpers to placeholders
    html = re.sub(r"\{\{\s*date\('Y'\)\s*\}\}", "YYYY", html)
    html = re.sub(r"\{\{\s*date\('m'\)\s*\}\}", "MM", html)
    html = re.sub(r"\{\{\s*date\('d'\)\s*\}\}", "DD", html)

    # Protocol-relative image/link URLs → https
    html = re.sub(r'(src|href)="//invoiceplane\.com/', r'\1="https://invoiceplane.com/', html)
    html = re.sub(r'href="//invoiceplane\.com/', 'href="https://invoiceplane.com/', html)

    # Unwrap lightbox/thumbnail link wrappers (keep alt text from inner img)
    # These are <a href="..." rel="lightbox"><img src="..." /></a>
    # markdownify will handle them fine as image links

    # Remove h1 elements that are purely logo/image containers (e.g. root page logo)
    html = re.sub(r'<h1[^>]*>\s*(?:<img[^>]*/?>|<span[^>]*>.*?</span>|\s)*</h1>', '', html, flags=re.DOTALL)

    # Remove Font Awesome icon spans/elements (they don't render in markdown)
    html = re.sub(r'<i\s+class="fa[^"]*"[^>]*></i>', "", html)
    html = re.sub(r'<span\s+class="[^"]*fa[^"]*"[^>]*></span>', "", html)
    html = re.sub(r'<span\s+class="[^"]*menu-icon[^"]*"[^>]*>.*?</span>', "", html, flags=re.DOTALL)

    # Convert alert divs to simpler HTML that markdownify can handle
    html = re.sub(
        r'<div\s+class="alert alert-warning"[^>]*>(.*?)</div>',
        r'<blockquote><strong>Warning:</strong>\1</blockquote>',
        html, flags=re.DOTALL
    )
    html = re.sub(
        r'<div\s+class="alert alert-info"[^>]*>(.*?)</div>',
        r'<blockquote><strong>Note:</strong>\1</blockquote>',
        html, flags=re.DOTALL
    )
    html = re.sub(
        r'<div\s+class="alert alert-danger"[^>]*>(.*?)</div>',
        r'<blockquote><strong>Danger:</strong>\1</blockquote>',
        html, flags=re.DOTALL
    )
    html = re.sub(
        r'<div\s+class="alert alert-success"[^>]*>(.*?)</div>',
        r'<blockquote><strong>Info:</strong>\1</blockquote>',
        html, flags=re.DOTALL
    )

    # Unwrap card containers (FAQ cards etc.) — just keep inner content
    html = re.sub(r'<div[^>]+class="[^"]*card-header[^"]*"[^>]*>', '<h4>', html)
    html = re.sub(r'<div[^>]+class="[^"]*card-block[^"]*"[^>]*>', '<div>', html)
    html = re.sub(r'<div[^>]+class="[^"]*card-body[^"]*"[^>]*>', '<div>', html)
    html = re.sub(r'<div[^>]+class="[^"]*card[^"]*"[^>]*>', '<div>', html)

    # Unwrap table-responsive divs
    html = re.sub(r'<div[^>]+class="table-responsive"[^>]*>', '<div>', html)

    # Unwrap feature grid divs (about page)
    html = re.sub(r'<div[^>]+class="[^"]*col[^"]*"[^>]*>', '<div>', html)
    html = re.sub(r'<div[^>]+class="[^"]*row[^"]*"[^>]*>', '<div>', html)
    html = re.sub(r'<div[^>]+class="[^"]*jumbotron[^"]*"[^>]*>', '<div>', html)
    html = re.sub(r'<div[^>]+class="[^"]*changelog[^"]*"[^>]*>', '<div>', html)

    # Remove remaining class/style/data attributes from divs to clean up
    html = re.sub(r'<div[^>]+>', '<div>', html)

    # Remove id attributes from headings (markdownify will handle plain headings)
    html = re.sub(r'(<h[1-6])\s+id="[^"]*"', r'\1', html)

    # Remove class/style attributes from spans
    html = re.sub(r'<span[^>]+class="[^"]*(?:status|text)[^"]*"[^>]*>(.*?)</span>', r'\1', html, flags=re.DOTALL)
    html = re.sub(r'<span[^>]*>', '', html)
    html = re.sub(r'</span>', '', html)

    # Remove small tags (keep content)
    html = re.sub(r'<small>(.*?)</small>', r'\1', html, flags=re.DOTALL)

    # Fix broken HTML attribute in about page
    html = html.replace('target?"_blank"', 'target="_blank"')

    # Strip target="_blank" attributes (not relevant in markdown)
    html = re.sub(r'\s+target="_blank"', '', html)
    html = re.sub(r'\s+class="ext"', '', html)
    html = re.sub(r'\s+class="thumbnail"', '', html)
    html = re.sub(r'\s+data-lightbox="[^"]*"', '', html)
    html = re.sub(r'\s+rel="lightbox"', '', html)

    # Handle <img> that are inside <a> - keep the link but add meaningful alt
    # markdownify handles this natively

    # Strip the h2.page-title element — the title is prepended separately.
    # If a page-title h2 is present, also demote other headings (h3→h2, h4→h3, h5→h4)
    # so sections end up at ##. Root page has no page-title h2, so no demotion needed.
    has_page_title = bool(re.search(r'<h2[^>]+class="page-title"[^>]*>', html))
    html = re.sub(r'<h2[^>]+class="page-title"[^>]*>.*?</h2>', '', html, flags=re.DOTALL)
    if has_page_title:
        html = demote_headings(html)

    # Remove inline styles
    html = re.sub(r'\s+style="[^"]*"', '', html)

    return html


def blade_to_markdown(src_path: Path) -> str:
    content = src_path.read_text(encoding="utf-8")

    title = extract_title(content)
    body_html = extract_body(content)

    if not body_html:
        return f"# {title}\n"

    body_html = preprocess(body_html)

    markdown = md(
        body_html,
        heading_style="ATX",
        bullets="-",
        code_language="",
        strip=["script", "style"],
    )

    # Prepend the page title as h1
    if title:
        markdown = f"# {title}\n\n" + markdown

    # Collapse 3+ consecutive blank lines to 2
    markdown = re.sub(r'\n{3,}', '\n\n', markdown)

    # Strip leading/trailing whitespace per line (but preserve code blocks)
    lines = markdown.split('\n')
    cleaned = []
    in_code = False
    for line in lines:
        if line.startswith('```'):
            in_code = not in_code
        if not in_code:
            cleaned.append(line.rstrip())
        else:
            cleaned.append(line)
    markdown = '\n'.join(cleaned)

    return markdown.strip() + '\n'


def main():
    created = []
    for src_rel, out_rel in FILE_MAP.items():
        src_path = SRC_DIR / src_rel
        out_path = OUT_DIR / out_rel

        if not src_path.exists():
            print(f"  SKIP (not found): {src_rel}")
            continue

        out_path.parent.mkdir(parents=True, exist_ok=True)
        markdown = blade_to_markdown(src_path)
        out_path.write_text(markdown, encoding="utf-8")
        created.append(out_rel)
        print(f"  OK: {src_rel} → {out_rel}")

    print(f"\nConverted {len(created)} files to {OUT_DIR}")


if __name__ == "__main__":
    main()
