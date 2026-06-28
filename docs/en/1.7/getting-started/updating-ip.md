# Update InvoicePlane

## Contents

- [Breaking changes](#breaking-changes)
- [New ipconfig.php settings](#new-ipconfigphp-settings)
- [**Upgrade instructions (v1.6.x to v1.7.0)**](#16x-170-instructions)
  1. Pre-upgrade security audit
  2. Handle custom templates
  3. Replace files & run setup
  4. Post-upgrade hardening

---

## Breaking changes

> **Note:**
> For a complete description of every security fix in 1.7, see [Security Changes in 1.7](/en/1.7/security).

### PDF template allow list (security fix)

InvoicePlane 1.7 replaces dynamic template discovery with a static allow list to prevent Remote Code Execution. **Any custom PDF template that is not declared in `ipconfig.php` will no longer be available** after the upgrade.

Before upgrading:
- List all custom template files in `application/views/invoice_templates/` and `application/views/quote_templates/`
- Decide whether to keep them in the application directory (add them to the built-in constant in `Mdl_templates.php`) or move them to an external folder (declare them in `ipconfig.php`)

See [PDF Template Allow List](/en/1.7/templates/pdf-template-allowlist) for full configuration details.

### PHP version

InvoicePlane 1.7 requires **PHP 8.1 or higher**. PHP 8.2 and 8.3 are also supported and recommended.

---

## New ipconfig.php settings

Add the following options to your `ipconfig.php` after upgrading. None are required, but all are recommended.

```ini
; --- Custom templates ---
; Path to a directory outside the web root containing custom PDF templates.
; Must include trailing slash.
CUSTOM_TEMPLATES_FOLDER=/srv/invoiceplane-templates/

; Comma-separated allow list of custom template names (no .php extension).
; Only names listed here will appear in the template selector.
CUSTOM_INVOICE_TEMPLATES_PDF=My Invoice,My Invoice - Detailed
CUSTOM_INVOICE_TEMPLATES_PUBLIC=My Invoice Web
CUSTOM_QUOTE_TEMPLATES_PDF=My Quote
CUSTOM_QUOTE_TEMPLATES_PUBLIC=My Quote Web

; --- Security ---
; Strip EXIF metadata from uploaded images (default: false).
SEC_STRIP_EXIF_FROM_IMAGES=false

; Password reset token lifetime in minutes (default: 15).
PASSWORD_RESET_TOKEN_EXPIRY_MINUTES=15
```

---

## Instructions to upgrade to 1.7.0 from 1.6.x

#### 1. Pre-upgrade security audit

Inspect your template directories for unexpected files before upgrading:

```bash
find application/views/invoice_templates/ -name "*.php" | sort
find application/views/quote_templates/ -name "*.php" | sort
```

Expected built-in files: `InvoicePlane.php`, `InvoicePlane - paid.php`, `InvoicePlane_Web.php`. Any other PHP file is either a custom template (which you need to register) or an unexpected file that should be removed.

Also verify the template values stored in the database:

```sql
SELECT setting_key, setting_value
FROM ip_settings
WHERE setting_key IN ('default_invoice_template', 'default_quote_template',
                      'public_invoice_template', 'public_quote_template');
```

Expected values are `InvoicePlane`, `InvoicePlane - paid`, or `InvoicePlane_Web`. Unexpected values should be investigated before proceeding.

#### 2. Handle custom templates

If you have custom templates stored inside the application:

**Option A — Declare them in `ipconfig.php` (recommended):**

1. Create a folder outside your web root, e.g. `/srv/invoiceplane-templates/`
2. Copy your custom template files there, preserving the sub-directory structure (`invoice/pdf/`, `quote/pdf/`, etc.)
3. Add the settings to `ipconfig.php` as shown in [New ipconfig.php settings](#new-ipconfigphp-settings) above

**Option B — Keep them in the application directory:**

Add each custom template name to the `ALLOWED_INVOICE_TEMPLATES` or `ALLOWED_QUOTE_TEMPLATES` constant in `application/modules/invoices/models/Mdl_templates.php`. You must redeploy this file every time you upgrade.

#### 3. Preliminary operations

1. Make a backup of your database and all files. (This is **very important** to prevent any data loss)
2. Download the latest version from [InvoicePlane.com](https://invoiceplane.com/downloads).

#### 4. Replace files & run setup

1. Copy all files to the root directory of your InvoicePlane installation but **do not** overwrite the
   following files:
   - The `ipconfig.php` file
   - Custom template files (if using Option B above)
   - The files for custom styles: `assets/core/css/custom.css` and `assets/core/css/custom-pdf.css`
   - Uploaded images in the `uploads/` folder (e.g. your company logo)
   - Custom language keys at `application/language/COUNTRY/custom_lang.php`
   > **Note:**
   >
   > An *easy* way of performing this operation is to upload the new InvoicePlane version in a separate folder, copy the above files into it, then swap the folder names.
2. Add the new `ipconfig.php` settings listed above.
3. Open `http://yourdomain.com/index.php/setup` and follow the instructions. The app will run all database migrations automatically.
   - If you encounter any errors, press "Try Again" to resolve them and continue.
4. Log in and confirm the application works correctly, including template selection for invoices and quotes.

#### 5. Post-upgrade hardening

Set template directories to read-only so the web server cannot write new files there:

```bash
chmod 555 application/views/invoice_templates/
chmod 555 application/views/quote_templates/
chmod 444 application/views/invoice_templates/*.php
chmod 444 application/views/quote_templates/*.php
```

If using `CUSTOM_TEMPLATES_FOLDER`, apply the same permissions to those directories.
