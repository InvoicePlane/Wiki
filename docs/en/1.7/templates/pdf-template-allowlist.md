# PDF Template Allow List

InvoicePlane 1.7 introduces a static allow list for PDF templates to prevent a critical Remote Code Execution (RCE) vulnerability. Only templates explicitly listed in the allow list will be loaded when generating PDF invoices and quotes.

## Background

Prior to 1.7, the system dynamically scanned the templates directory to build a list of available templates at runtime. This meant that any PHP file placed in the templates folder would automatically become available — and potentially executable — via the template selector. An attacker with admin access could exploit this to run arbitrary code.

The fix replaces dynamic scanning with a two-tier static allow list:

1. **Built-in templates** — hardcoded in the application source code (`Mdl_templates.php`)
2. **Custom templates** — declared explicitly in `ipconfig.php`

## Built-in Templates

The following templates are always available without any configuration:

| Template name | Type | Format |
|---|---|---|
| `InvoicePlane` | Invoice & Quote | PDF |
| `InvoicePlane - paid` | Invoice | PDF |
| `InvoicePlane_Web` | Invoice & Quote | Public (HTML) |

> **Note:**
> These names are case-sensitive. The template will not load if the name in the database does not match exactly.

## Adding Custom Templates

To add a custom template you must both place the file on disk **and** declare its name in `ipconfig.php`. A file that exists on disk but is not in the allow list will be silently ignored.

### Step 1 — Place template files outside the web root

Store custom templates in a directory that is **not** accessible over HTTP. Set the path in `ipconfig.php`:

```ini
CUSTOM_TEMPLATES_FOLDER=/srv/invoiceplane-templates/
```

The directory must contain the standard sub-structure:

```
/srv/invoiceplane-templates/
  invoice/
    pdf/          ← custom invoice PDF templates
    public/       ← custom invoice HTML (public link) templates
  quote/
    pdf/          ← custom quote PDF templates
    public/       ← custom quote HTML (public link) templates
```

### Step 2 — Declare template names in the allow list

Add only the names you want to allow. Names must consist of letters, numbers, spaces, hyphens, and underscores only — no path separators or file extensions.

```ini
; Custom invoice templates
CUSTOM_INVOICE_TEMPLATES_PDF=My Invoice,My Invoice - Detailed
CUSTOM_INVOICE_TEMPLATES_PUBLIC=My Invoice Web

; Custom quote templates
CUSTOM_QUOTE_TEMPLATES_PDF=My Quote
CUSTOM_QUOTE_TEMPLATES_PUBLIC=My Quote Web
```

Multiple names are separated by commas. Templates not listed here will not appear in the template selector and will not be loaded, even if the file exists.

### Step 3 — Set restrictive file permissions

Prevent the web server from writing to the template directories:

```bash
chmod 555 /srv/invoiceplane-templates/invoice/pdf/
chmod 555 /srv/invoiceplane-templates/quote/pdf/
chmod 444 /srv/invoiceplane-templates/invoice/pdf/*.php
chmod 444 /srv/invoiceplane-templates/quote/pdf/*.php
```

## Security Validation

When a template is requested, InvoicePlane applies the following checks in order:

1. Reject empty or non-string values
2. Reject path traversal characters (`..`, `/`, `\`)
3. Validate the request type (`invoice` or `quote`)
4. Validate the scope (`pdf` or `public`)
5. Check the template name against the static allow list
6. Validate the character set (alphanumeric, spaces, hyphens, underscores)
7. Verify the file exists before loading it

A template fails silently if it does not pass all seven checks.

## Upgrading from 1.6

If you are upgrading from InvoicePlane 1.6 and have custom templates stored inside `application/views/`, you must move them and register them in `ipconfig.php` before the upgrade.

Templates stored inside the application directory are **not** automatically trusted in 1.7. See [Updating InvoicePlane](/en/1.7/getting-started/updating-ip) for full upgrade steps.

## Auditing Your Installation

After upgrading, check the template directories for unexpected PHP files:

```bash
find application/views/invoice_templates/ -name "*.php" | sort
find application/views/quote_templates/ -name "*.php" | sort
```

Expected files are: `InvoicePlane.php`, `InvoicePlane - paid.php`, `InvoicePlane_Web.php`.
Any other PHP file should be investigated and removed if not a legitimate custom template.
