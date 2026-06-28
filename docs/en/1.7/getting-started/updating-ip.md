# Update InvoicePlane

## Contents

- [What changed in 1.7](#what-changed-in-17)
- [New ipconfig.php settings](#new-ipconfigphp-settings)
- [**Upgrade instructions (v1.6.x to v1.7.0)**](#upgrade-instructions)
  1. Take stock of your custom templates
  2. Preliminary operations
  3. Replace files & run setup
  4. Lock down template directories

---

## What changed in 1.7

### Custom PDF templates must be registered

InvoicePlane 1.7 changes how PDF templates are discovered. Instead of scanning the templates directory automatically, the application now works from a declared list. Built-in templates continue to work without any configuration. Custom templates — any template you created yourself — must be declared in `ipconfig.php` before they will appear in the template selector.

See [Custom PDF Templates](/en/1.7/templates/pdf-template-allowlist) for the full setup.

### SVG logo files are no longer accepted

The logo upload fields now accept JPG, JPEG, PNG, GIF, and WEBP only. If you currently use an SVG file as your company logo or login logo, you will need to replace it with one of the accepted formats.

### PHP version

InvoicePlane 1.7 requires **PHP 8.1 or higher**. PHP 8.2 and 8.3 are also supported and recommended.

### `phpmail_send()` now reports delivery failures

If you have custom code that calls the internal `phpmail_send()` function, note that it now returns `false` when delivery fails. Prior to 1.7 it always returned `true`. Update any custom code that relies on the old behaviour.

---

## New ipconfig.php settings

Add these to your `ipconfig.php` after upgrading. All are optional, but review each one.

```ini
; Path to a directory outside the web root containing custom PDF templates.
; Required if you have custom templates. Must include trailing slash.
CUSTOM_TEMPLATES_FOLDER=/srv/invoiceplane-templates/

; Comma-separated names of custom templates to make available (no .php extension).
CUSTOM_INVOICE_TEMPLATES_PDF=My Invoice,My Invoice - Detailed
CUSTOM_INVOICE_TEMPLATES_PUBLIC=My Invoice Web
CUSTOM_QUOTE_TEMPLATES_PDF=My Quote
CUSTOM_QUOTE_TEMPLATES_PUBLIC=My Quote Web

; How long a password reset link stays valid, in minutes (default: 15).
PASSWORD_RESET_TOKEN_EXPIRY_MINUTES=15

; Strip EXIF metadata from uploaded images (default: false).
SEC_STRIP_EXIF_FROM_IMAGES=false
```

---

## Upgrade instructions

### 1. Take stock of your custom templates

Before upgrading, list the template files in your installation:

```bash
ls application/views/invoice_templates/pdf/
ls application/views/invoice_templates/public/
ls application/views/quote_templates/pdf/
ls application/views/quote_templates/public/
```

Built-in files you can ignore: `InvoicePlane.php`, `InvoicePlane - paid.php`, `InvoicePlane - overdue.php`, `InvoicePlane_Web.php`.

Any other `.php` files are custom templates. For each one, decide how to handle it after the upgrade:

**Option A — Move to an external folder (recommended)**

1. Create a directory outside your web root, e.g. `/srv/invoiceplane-templates/`
2. Copy your templates there, preserving the sub-directory structure (`invoice/pdf/`, `quote/pdf/`, etc.)
3. Add the `CUSTOM_TEMPLATES_FOLDER` and `CUSTOM_*_TEMPLATES_*` settings to `ipconfig.php` — see [Custom PDF Templates](/en/1.7/templates/pdf-template-allowlist)

**Option B — Keep them inside the application**

Add each template name to the `ALLOWED_INVOICE_TEMPLATES` or `ALLOWED_QUOTE_TEMPLATES` constant in `application/modules/invoices/models/Mdl_templates.php`. You will need to reapply this edit every time you upgrade.

Also check the template settings stored in the database and confirm they match one of the built-in or custom template names you are keeping:

```sql
SELECT setting_key, setting_value
FROM ip_settings
WHERE setting_key IN ('default_invoice_template', 'default_quote_template',
                      'public_invoice_template', 'public_quote_template');
```

### 2. Preliminary operations

1. Make a backup of your database and all files. (This is **very important** to prevent any data loss)
2. Download the latest version from [InvoicePlane.com](https://invoiceplane.com/downloads).

### 3. Replace files & run setup

1. Copy all files to the root directory of your InvoicePlane installation but **do not** overwrite:
   - `ipconfig.php`
   - Custom template files (if keeping them inside the application — Option B above)
   - Custom styles: `assets/core/css/custom.css` and `assets/core/css/custom-pdf.css`
   - Uploaded images in the `uploads/` folder (e.g. your company logo)
   - Custom language keys at `application/language/COUNTRY/custom_lang.php`

   > **Tip:** Upload the new version into a separate folder, copy the above files into it, then rename the folders to swap them.

2. Add the new `ipconfig.php` settings listed in [New ipconfig.php settings](#new-ipconfigphp-settings).
3. Open `http://yourdomain.com/index.php/setup` and follow the instructions. The app runs all database migrations automatically.
   - If you see errors, press "Try Again" to continue.
4. Log in and verify the application works correctly, including template selection for invoices and quotes.

### 4. Lock down template directories

Set the template directories and files to read-only:

```bash
chmod 555 application/views/invoice_templates/pdf/
chmod 555 application/views/invoice_templates/public/
chmod 555 application/views/quote_templates/pdf/
chmod 555 application/views/quote_templates/public/
chmod 444 application/views/invoice_templates/pdf/*.php
chmod 444 application/views/invoice_templates/public/*.php
chmod 444 application/views/quote_templates/pdf/*.php
chmod 444 application/views/quote_templates/public/*.php
```

If you are using `CUSTOM_TEMPLATES_FOLDER`, apply the same permissions to those directories.
