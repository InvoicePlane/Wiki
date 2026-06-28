# Changelog

## v1.7.2 — 2026-04-06

The main focus of this release was hardening the application across a broad range of areas. If you are upgrading from 1.7.0 or 1.7.1, read [Updating InvoicePlane](/en/1.7/getting-started/updating-ip) before proceeding — custom PDF templates now require registration in `ipconfig.php`.

### Added
- Custom PDF templates can now be stored outside the web root and registered in `ipconfig.php` via `CUSTOM_TEMPLATES_FOLDER` and the `CUSTOM_*_TEMPLATES_*` settings. See [Custom PDF Templates](/en/1.7/templates/pdf-template-allowlist).
- Password reset links now expire. The default is 15 minutes; configurable via `PASSWORD_RESET_TOKEN_EXPIRY_MINUTES` in `ipconfig.php`. See [User Accounts](/en/1.7/settings/user-accounts#password-reset).
- Optional EXIF metadata stripping for uploaded images. Enable with `SEC_STRIP_EXIF_FROM_IMAGES=true` in `ipconfig.php`. See [General Settings](/en/1.7/settings/general#logo-upload).
- PHP 8.3 compatibility confirmed. InvoicePlane 1.7.2 supports PHP 8.1, 8.2, and 8.3.

### Changed
- PDF template loading now uses a fixed list rather than scanning the templates directory. Built-in templates are unchanged; custom templates must be declared in `ipconfig.php`. See [Custom PDF Templates](/en/1.7/templates/pdf-template-allowlist).
- The email template preview now shows the raw template source instead of rendering it as HTML. See [Email Templates](/en/1.7/settings/email-templates).
- `phpmail_send()` now returns `false` when delivery fails. Previously it always returned `true`. Custom code calling this function should be updated to handle the failure case. See [Email Settings](/en/1.7/settings/email#delivery-failures).
- Setup wizard is automatically disabled after a successful installation. See [Installation](/en/1.7/getting-started/installation).
- Password reset tokens are now generated with `random_bytes(32)` for stronger entropy.
- Open redirect prevention: redirect targets are now validated to be internal URLs. Affects the payment flow, custom fields, and filter modules.
- File deletion for logo removal is now confined to the `uploads/` directory.
- SMTP debug output is sanitised before being written to logs.
- AJAX filter controllers now validate table name and ID parameters extracted from request headers.
- Guest payment queries now use explicit integer casting for all ID values.

### Fixed
- XSS: output escaping added to invoice number in the payment form.
- XSS: tax rate name, payment method name, and custom field values now correctly escaped in all views.
- Binary data handling in `Cryptor::decryptString()` — replaced multibyte string functions with byte-safe equivalents, which could cause decryption failures.
- Paths passed to the logo removal function are now validated before `unlink()` is called.

### Removed
- No features removed in this release.

---

## v1.7.1 — 2026-02-16

### Changed
- SVG files are no longer accepted for logo uploads. Accepted formats are PNG, JPG/JPEG, GIF, and WEBP. Replace any existing SVG logos before or after upgrading. See [General Settings](/en/1.7/settings/general#logo-upload).
- QR code image width reduced to 100 px.

### Fixed
- Output escaping added across invoice numbers, quote numbers, tax rate names, payment method names, custom field labels, client addresses, and several other fields to prevent stored content from being interpreted as HTML.
- Email address fields now accept comma-separated and semicolon-separated lists. See [Email Settings](/en/1.7/settings/email).

> **Note:** InvoicePlane 1.6.5 was released on the same date and applies these same fixes to the 1.6 series for users staying on PHP 8.1.

---

## v1.7.0 — 2025-01-19

First release of the 1.7 series. The 1.7 series requires PHP 8.1 or higher and adds full compatibility with PHP 8.2 and 8.3. See [Requirements](/en/1.7/getting-started/requirements).

### Added
- PHP 8.2 and 8.3 compatibility. InvoicePlane 1.7.0 is tested on PHP 8.1, 8.2, and 8.3.
- PayPal Advanced Credit Cards and Venmo are now available as payment methods alongside Stripe. See [Online Payments](/en/1.7/settings/online-payments).
- Open invoices are now visible to guest users on their index page.
- Invoice and quote templates now support named footers.
- A default ordering option for [Recurring Invoices](/en/1.7/modules/recurring-invoices).
- QR code image width reduced to 100 px.
- Email address fields now accept comma-separated and semicolon-separated lists. See [Email Settings](/en/1.7/settings/email).
- `$show_item_discounts` is now available in the `InvoicePlane_Web.php` public template.

### Fixed
- File access validation added across controllers to prevent unauthorised file access through direct URL manipulation.
- E-invoicing: version checking and logging for client e-invoicing fields.
- Multiple email address sending no longer produces errors.
- Format_number prevented from returning non-numeric values.
- Quote/invoice guest download attachment corrected.

---

> **Note:**
> Changelogs for older versions of InvoicePlane can be found in the relevant section of this wiki. For the 1.6 series see [Changelog — 1.6](/en/1.6/general/changelog).
