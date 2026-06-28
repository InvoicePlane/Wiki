# Custom PDF Templates

InvoicePlane comes with a set of built-in PDF templates for invoices and quotes. If you need a different look, you can create your own templates and make them available alongside the built-in ones.

## Built-in templates

The following templates are included and available without any configuration:

| Template name | Used for | Format |
|---|---|---|
| `InvoicePlane` | Invoices & Quotes | PDF |
| `InvoicePlane - paid` | Invoices | PDF |
| `InvoicePlane - overdue` | Invoices | PDF |
| `InvoicePlane_Web` | Invoices & Quotes | Public link (HTML) |

Template names are case-sensitive. The name stored in the database must match exactly.

## How template loading works

In InvoicePlane 1.7, templates are loaded from a fixed list rather than by scanning the templates directory. A template file that exists on disk will not appear in the selector and will not be loaded unless its name is declared in the configuration. This applies only to custom templates — the built-in templates listed above are always available.

## Adding custom templates

### Step 1 — Create a templates folder outside the web root

Store your custom template files in a directory that is not served over HTTP. This keeps the files separate from the application and makes it straightforward to preserve them across upgrades.

```ini
CUSTOM_TEMPLATES_FOLDER=/srv/invoiceplane-templates/
```

The directory must follow this structure:

```
/srv/invoiceplane-templates/
  invoice/
    pdf/          ← custom invoice PDF templates
    public/       ← custom invoice HTML (public link) templates
  quote/
    pdf/          ← custom quote PDF templates
    public/       ← custom quote HTML (public link) templates
```

### Step 2 — Declare the template names in `ipconfig.php`

List every template name you want to make available. Names may contain letters, numbers, spaces, hyphens, and underscores. Do not include the `.php` file extension. Separate multiple names with commas.

```ini
; Custom invoice templates
CUSTOM_INVOICE_TEMPLATES_PDF=My Invoice,My Invoice - Detailed
CUSTOM_INVOICE_TEMPLATES_PUBLIC=My Invoice Web

; Custom quote templates
CUSTOM_QUOTE_TEMPLATES_PDF=My Quote
CUSTOM_QUOTE_TEMPLATES_PUBLIC=My Quote Web
```

Templates whose names are not listed here will not appear in the template selector, even if the file exists on disk.

### Step 3 — Set file permissions

Make the template directories and files read-only so they cannot be modified while the application is running:

```bash
chmod 555 /srv/invoiceplane-templates/invoice/pdf/
chmod 555 /srv/invoiceplane-templates/quote/pdf/
chmod 444 /srv/invoiceplane-templates/invoice/pdf/*.php
chmod 444 /srv/invoiceplane-templates/quote/pdf/*.php
```

## Upgrading from 1.6

If you are upgrading from InvoicePlane 1.6 and have custom templates inside `application/views/invoice_templates/` or `application/views/quote_templates/`, they will not be available automatically after upgrading. You have two options:

**Option A — Move them to the custom templates folder (recommended)**

Move the template files to a directory outside the web root, set `CUSTOM_TEMPLATES_FOLDER` in `ipconfig.php`, and list the template names using the `CUSTOM_*_TEMPLATES_*` settings above.

**Option B — Keep them in the application directory**

Add each template name to the `ALLOWED_INVOICE_TEMPLATES` or `ALLOWED_QUOTE_TEMPLATES` constant in `application/modules/invoices/models/Mdl_templates.php`. You will need to reapply this change each time you upgrade.

## Checking what templates are installed

To see which template files are present in the built-in directories:

```bash
ls application/views/invoice_templates/pdf/
ls application/views/invoice_templates/public/
ls application/views/quote_templates/pdf/
ls application/views/quote_templates/public/
```

The built-in directories should contain only the files that ship with InvoicePlane. Custom templates belong in the folder set by `CUSTOM_TEMPLATES_FOLDER`.
