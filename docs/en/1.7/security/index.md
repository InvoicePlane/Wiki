# What changed in 1.7

This page summarises the changes in InvoicePlane 1.7 that affect how you configure and run the application. Each item links to the feature documentation where it is explained in context.

## Things you need to act on

### Custom PDF templates must be registered

PDF templates are no longer picked up automatically from the templates directory. If you have custom templates, you need to declare their names in `ipconfig.php` before upgrading. Built-in templates (InvoicePlane, InvoicePlane - paid, InvoicePlane_Web) continue to work without any configuration.

→ [Custom PDF Templates](/en/1.7/templates/pdf-template-allowlist)

### SVG logos are no longer accepted

SVG is no longer an accepted format for logo uploads. If your installation uses an SVG company logo or login logo, replace it with a PNG, JPG, GIF, or WEBP file.

→ [Logo upload formats](/en/1.7/settings/general#logo-upload)

### Custom integrations calling `phpmail_send()`

`phpmail_send()` previously returned `true` regardless of whether the email was actually delivered. It now returns the real result. If you have any custom code that calls this function, update it to handle `false` as a delivery failure.

---

## Changes that work automatically after upgrading

### Password reset links now expire

Password reset links expire after 15 minutes by default. The expiry time is configurable in `ipconfig.php`.

→ [Password reset](/en/1.7/settings/user-accounts#password-reset)

### Email template preview shows source

The email template preview no longer renders the template as HTML. It shows the raw template source instead, so what you see is what you edit, not a rendered result.

→ [Email Templates](/en/1.7/settings/email-templates)

### Setup wizard is locked after installation

After a successful installation, the setup wizard (`/index.php/setup`) is automatically disabled. It is no longer accessible once setup is complete.

→ [Installation](/en/1.7/getting-started/installation)

### Image metadata stripping (opt-in)

Uploaded images can have embedded metadata (EXIF) stripped automatically. This is disabled by default and can be enabled in `ipconfig.php`.

→ [Logo upload](/en/1.7/settings/general#logo-upload)

---

## New `ipconfig.php` settings

```ini
; Custom template directory outside the web root (optional)
CUSTOM_TEMPLATES_FOLDER=/srv/invoiceplane-templates/

; Comma-separated names of custom templates to make available (no .php extension)
CUSTOM_INVOICE_TEMPLATES_PDF=
CUSTOM_INVOICE_TEMPLATES_PUBLIC=
CUSTOM_QUOTE_TEMPLATES_PDF=
CUSTOM_QUOTE_TEMPLATES_PUBLIC=

; How long a password reset link remains valid, in minutes (default: 15, max: 1440)
PASSWORD_RESET_TOKEN_EXPIRY_MINUTES=15

; Strip EXIF/image metadata from uploaded images (default: false)
SEC_STRIP_EXIF_FROM_IMAGES=false
```
