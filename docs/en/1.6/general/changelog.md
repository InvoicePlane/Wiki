# Changelog

## v1.6.4 — 2025-01-19

### Added
- PayPal Advanced Credit Cards and Venmo are now available as payment methods. See [Online Payments](/en/1.6/settings/online-payments).
- Open invoices are now visible to guest users on their index page.
- Invoice and quote templates now support named footers.
- A default ordering option has been added for [Recurring Invoices](/en/1.6/modules/recurring-invoices).

### Changed
- QR code image width reduced to 100 px for better display proportions.
- Email address fields now accept comma-separated and semicolon-separated lists. See [Email Settings](/en/1.6/settings/email).
- `$show_item_discounts` is now available in the `InvoicePlane_Web.php` public template.

### Fixed
- Multiple email address sending no longer produces errors.
- File access validation added across controllers to prevent unauthorised file access through direct URL manipulation.
- Version checking and logging added for e-invoicing client fields.
- Format_number function prevented from returning non-numeric values.
- Quote/invoice guest download attachment button corrected.
- Alpine Docker image compatibility resolved.

---

## v1.6.3 — 2024-08-05

### Added
- "Invoices per client" report. See [Reports](/en/1.6/modules/index).
- Pagination added to the invoice and quote template lists in Settings.
- E-invoicing infrastructure updates: legacy calculation setup step added, client overview now reflects e-invoicing state correctly.
- Custom fields integrated into Settings controllers.

### Changed
- `node-sass` replaced with `sass` for improved build compatibility.
- Invoice and quote sorting now prioritises date over ID.
- European number formats (decimal comma) now handled correctly across the application.

### Fixed
- PDF download filename handling in invoices.
- Full-page loader spinner visibility.
- QR code rendering conditions for invoice balances.
- Client summary deletion button navigation.
- SMTP password now re-encrypted correctly after saving settings. See [Email Settings](/en/1.6/settings/email).
- Email template rendering compatibility with PHP 8.2.
- Email templates now work correctly with custom single-choice fields.
- Various table and client view styling inconsistencies.

---

## v1.6.2 — 2022-12-30

### Added
- Pagination for tabs in the client detail view. See [Clients](/en/1.6/modules/clients).
- Copy functionality extended to quote fields.
- Additional digit support for quantity entries in line items.
- PHP 8.2 dynamic property support.
- Docker publishing workflow.

### Fixed
- Payment form no longer allows amounts exceeding the invoice total.
- QR code variable errors resolved.
- File download function corrected.
- Database query issue during setup resolved.
- Broken client link in the projects dashboard widget.
- Database migration issues and setup configuration problems.

---

## v1.6.1 — 2022-12-16

### Added
- Payment QR codes available in both web and PDF templates. See [Using Templates](/en/1.6/templates/using-templates).
- Keyboard shortcut Ctrl+S to save forms.
- Product fields are now available in quote templates. See [Quotes](/en/1.6/modules/quotes).
- Encryption key is now generated automatically during installation.

### Fixed
- Logo display in PDF generation was broken in v1.6.0 — now restored.
- Stripe loading corrected for installations not using clean URLs.
- Email template variable insertion bug resolved. See [Email Templates](/en/1.6/settings/email-templates).
- Required fields validation improvements.
- Session handling improvements for mobile environments.
- Client search now trims whitespace before searching.

---

## v1.6.0 — 2022-12-04

First release of the 1.6 series. The primary goal of this release was compatibility with PHP 8 and MySQL 8, which the previous 1.5 series did not support.

### Added
- PHP 8.0 and 8.1 compatibility. See [Requirements](/en/1.6/getting-started/requirements).
- Responsive layout for invoices and quotes.
- `SECURITY.md` added to the repository.

### Changed
- Online payments: only Stripe is supported in this release. PayPal and other gateways from 1.5 are not available. See [Online Payments](/en/1.6/settings/online-payments).

### Fixed
- Discount handling for recurring invoices — discounts were being dropped. See [Recurring Invoices](/en/1.6/modules/recurring-invoices).
- Payment method select display.
- Client surname display in recurring invoices.
- PDF template selection for guest users.
- ZUGFeRD PDF generation: client name is now correctly escaped.
- Minor display issues in the quotes item list.

---

## v1.5.11 — 2019-04-17

Final release of the 1.5 series.

- PHP 7.4 support added.
- Performance improvements.
- Several security fixes.

Upgrading from 1.5.11 to 1.6 requires running the setup wizard to apply database migrations. See [Updating InvoicePlane](/en/1.6/getting-started/updating-ip).

> **Note:**
> Changelogs for versions prior to 1.5.11 are in the relevant older version sections of this wiki.
