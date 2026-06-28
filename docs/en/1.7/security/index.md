# Security Changes in 1.7

InvoicePlane 1.7 addresses 26 security vulnerabilities across a wide range of categories. This page documents every change, what was vulnerable, what changed, and what — if anything — you need to do.

## Quick reference

| # | Severity | Category | What changed | Action required? |
|---|---|---|---|---|
| 1 | Critical | RCE | PDF template allow list replaces filesystem scanning | Yes — register custom templates |
| 2 | Critical | Auth | Password reset tokens now expire and use secure entropy | No |
| 3 | High | File | Arbitrary file deletion via path traversal in logo settings | No |
| 4 | High | XSS | 32 output locations across 17 view files hardened | No |
| 5 | High | Auth | Guest payment IDOR/CSRF/SQL hardened | No |
| 6 | High | Auth | Password reset PRNG replaced with `random_bytes(32)` | No |
| 7 | High | SQL | DDL injection in tax rate decimal settings | No |
| 8 | High | SQL | Newline injection in database setup | No |
| 9 | Medium | Redirect | Open redirect via unvalidated `HTTP_REFERER` | No |
| 10 | Medium | SQL | Guest payment query concatenation hardened | No |
| 11 | Medium | Input | AJAX filter `HTTP_REFERER` extraction unvalidated | No |
| 12 | Medium | Log | SMTP debug output log injection | No |
| 13 | Medium | Error | `phpmail_send()` always returned `true` | Yes — check custom integrations |
| 14 | Medium | XSS | Email template preview rendered live HTML | No |
| 15 | Medium | File | SSRF-adjacent path injection in PDF/XML generation | No |
| 16 | Low | Crypto | Binary data corruption in Cryptor class | No |
| 17 | Low | Config | GitHub Actions workflows had excessive token scope | No |
| 18 | Info | Upload | SVG logo uploads blocked | Yes — replace any SVG logos |
| 19 | Info | Upload | EXIF metadata stripping added (opt-in) | Optional |
| 20 | Info | Upload | File upload log poisoning via filename | No |
| 21 | Info | Setup | Setup wizard accessible after installation | No |
| 22 | Info | XSS | Invoice/quote number unescaped in payment form | No |
| 23 | Info | XSS | Tax rate name unescaped | No |
| 24 | Info | XSS | Payment method name unescaped | No |
| 25 | Info | XSS | Custom field values unescaped | No |
| 26 | Info | XSS | Family name unescaped in product forms | No |

---

## Detailed documentation

### 1. Remote Code Execution via dynamic template whitelist (Critical — CVSS 9.9)

**CVE:** Pending  
**CWE:** CWE-732, CWE-693, CWE-98

**What was vulnerable:**  
The template system used `directory_map()` to scan the templates directory at runtime and build a whitelist of allowed template names from whatever files were present on disk. An administrator who could write a PHP file to the templates directory could make it automatically trusted, then set it as the active template in settings — causing arbitrary code to execute for every visitor who loads a public invoice URL.

**What changed:**  
`directory_map()` was removed entirely. The allowed template names are now hardcoded as static constants in `Mdl_templates.php`:

- `ALLOWED_INVOICE_TEMPLATES` — built-in invoice templates
- `ALLOWED_QUOTE_TEMPLATES` — built-in quote templates

Custom templates must be explicitly declared in `ipconfig.php` via the `CUSTOM_INVOICE_TEMPLATES_PDF`, `CUSTOM_INVOICE_TEMPLATES_PUBLIC`, `CUSTOM_QUOTE_TEMPLATES_PDF`, and `CUSTOM_QUOTE_TEMPLATES_PUBLIC` settings.

**Action required:** Yes. Any custom PDF template not listed in `ipconfig.php` will stop working after upgrading. See [PDF Template Allow List](/en/1.7/templates/pdf-template-allowlist) for full configuration instructions.

---

### 2. Password reset tokens never expired (Critical)

**What was vulnerable:**  
Password reset tokens had no expiry. A token sent to a user's email remained valid indefinitely, giving an attacker who gained access to an old email an unlimited window to reset the password.

**What changed:**  
- Tokens expire after a configurable period (default: 15 minutes). Expiry is tracked in the database and enforced on every use.
- The maximum allowed expiry is 24 hours.
- Rate limiting is applied: 5 attempts per IP per hour and 3 attempts per email address per hour.
- Timing-safe token comparison is used to prevent enumeration.

**New `ipconfig.php` setting:**

```ini
PASSWORD_RESET_TOKEN_EXPIRY_MINUTES=15
```

**Action required:** None unless you need a longer window than 15 minutes. Add the setting to `ipconfig.php` to change it.

---

### 3. Arbitrary file deletion via path traversal in logo settings (High — CVSS 7.1)

**CWE:** CWE-22

**What was vulnerable:**  
The logo filename was saved in the database without sanitization. When an administrator later removed the logo, the application called `unlink()` using the stored filename directly. By storing a value like `../../application/config/database.php`, an attacker with admin access could delete arbitrary files on the server.

**What changed:**  
- Logo filenames are now validated with `validate_safe_filename()` before being saved: path traversal sequences (`..`, `/`, `\`), null bytes, and absolute paths are all rejected.
- The `remove_logo()` function validates that the resolved file path is confined within the `/uploads/` directory using `realpath()` comparison before calling `unlink()`.
- Suspicious inputs are logged and the save operation is aborted.

**Action required:** None.

---

### 4. XSS across 32 output locations in 17 view files (High — CVSS 7.2–8.0)

**CWE:** CWE-79

**What was vulnerable:**  
Several view templates output user-supplied values directly into HTML without encoding. An administrator who entered a value like `<script>alert(1)</script>` in a name field would cause that script to execute for any user who viewed a page containing that value.

**Affected fields and locations:**

| Field | Locations fixed |
|---|---|
| Invoice number | Payment form (2 instances) |
| Quote number | Quote views |
| Tax rate name | Tax rate table, settings form |
| Payment method name | Payment method list |
| Custom field values | Custom field forms and display |
| Family name | Product form dropdown, families table, product modal, product table, product lookups modal |
| Unit name | Unit list views |
| Client name in ZUGFeRD invoices | PDF generation |

**What changed:**  
All of these locations now wrap output in `htmlsc()` (returns encoded string) or `_htmlsc()` (echoes encoded string), both using `htmlspecialchars()` with `ENT_QUOTES | ENT_IGNORE`. In addition, a global `filter_input()` method in `Admin_Controller` strips HTML tags and runs CodeIgniter's `xss_clean()` on all POST data before it reaches any model or database call.

**Action required:** None. Existing stored data is encoded at output time, so no data migration is needed.

---

### 5. IDOR, CSRF, and SQL injection in guest payment controller (High)

**What was vulnerable:**  
The guest payment controller — which handles unauthenticated invoice payment flows — had three weaknesses:

- **IDOR:** The invoice list query did not filter by client, so a guest user who guessed invoice IDs could access invoices belonging to other clients.
- **CSRF:** Payment form submissions were not protected by CSRF tokens.
- **SQL:** Invoice ID lists were assembled with `implode()` into raw WHERE clauses.

**What changed:**  
- The invoice query now filters with `where_in('ip_invoices.client_id', $this->user_clients)`, restricting results to the authenticated guest's clients only.
- CSRF token validation is enforced on all payment form submissions.
- All integer IDs are passed through `array_map('intval', ...)` before use in queries, and empty lists are checked before building WHERE clauses.

**Action required:** None.

---

### 6. Password reset token used weak random number generation (High)

**What was vulnerable:**  
The previous token was generated with a pattern equivalent to `md5(time() + $email + mt_rand())`. `mt_rand()` is not cryptographically secure and `time()` is predictable, making the token guessable given enough attempts.

**What changed:**  
Token generation was replaced with `generate_secure_token()` in `ip_security_helper.php`, which calls `random_bytes(32)` to produce 256 bits of cryptographically secure entropy, returned as a 64-character hex string.

**Action required:** None.

---

### 7. DDL injection in tax rate decimal settings (High)

**What was vulnerable:**  
The tax rate decimal precision setting was used directly in a `DECIMAL(x, y)` column definition without validation. An attacker with admin access could inject SQL DDL syntax by entering unexpected values in the decimal places field.

**What changed:**  
The decimal places value is now validated to be an integer within the allowed range (2–3 decimal places) before it is used in any schema-modifying query.

**Action required:** None.

---

### 8. Newline injection in database setup (High)

**What was vulnerable:**  
During the initial setup wizard, database credentials entered by the user were written to `ipconfig.php`. Values containing newline characters (`\n`, `\r\n`) could inject additional configuration lines into the file, potentially overriding settings.

**What changed:**  
All values written to `ipconfig.php` during setup are now stripped of newline and carriage-return characters before being written.

**Action required:** None for existing installations (setup completes once; the wizard is locked afterwards — see [#21](#21-setup-wizard-accessible-after-installation-info)).

---

### 9. Open redirect via unvalidated `HTTP_REFERER` (Medium — CVSS 6.1)

**CWE:** CWE-601

**What was vulnerable:**  
Several controllers used `redirect($_SERVER['HTTP_REFERER'])` directly to send users back to the previous page after an action. The `Referer` header is fully controlled by the browser or the requesting party. An attacker could craft a link that, when clicked by a logged-in user, redirected them to an external phishing site after the action completed. Affected areas included payment processing, custom fields, and filter modules.

**What changed:**  
A new `get_safe_referer()` function in `security_helper.php` validates that the referer URL belongs to the application's own domain before using it. External URLs are silently discarded and the application falls back to a safe internal URL.

**Action required:** None.

---

### 10. Guest payment SQL query concatenation (Medium — CVSS 6.5)

**CWE:** CWE-89

**What was vulnerable:**  
The guest payment module built WHERE clauses by concatenating an `implode()` of an ID array into a raw SQL string. While the immediate inputs happened to be safe at the time, this pattern would become an injection vector if the data source ever changed.

**What changed:**  
All ID values are now cast with `array_map('intval', $ids)` before use, and empty arrays are caught before a WHERE clause is constructed.

**Action required:** None.

---

### 11. AJAX filter extracted values from `HTTP_REFERER` without validation (Medium — CVSS 5.3)

**CWE:** CWE-20

**What was vulnerable:**  
AJAX filter controllers in `filter/controllers/Ajax.php` extracted table names and record IDs directly from the `HTTP_REFERER` header using `basename()`. While `basename()` prevented path traversal, the extracted values were used without further validation.

**What changed:**  
- Table names are now validated against a regex that allows only alphanumeric characters and underscores.
- Record IDs are explicitly cast to `int`.

**Action required:** None.

---

### 12. SMTP debug output written to logs without sanitization (Medium)

**CWE:** CWE-117 (Log Injection)

**What was vulnerable:**  
PHPMailer's SMTP debug callback wrote server responses verbatim to the application log. A malicious SMTP server could inject fake log entries by including newline characters and log-format strings in its responses.

**What changed:**  
All SMTP debug output now passes through `sanitize_for_logging()` before being written, which strips control characters including newlines and carriage returns.

**Action required:** None.

---

### 13. `phpmail_send()` always returned `true` (Medium — breaking change)

**CWE:** CWE-252 (Unchecked Return Value)

**What was vulnerable:**  
The `phpmail_send()` helper function returned `true` regardless of whether the email was actually delivered, masking delivery failures from callers.

**What changed:**  
The function now returns the actual boolean result from the underlying PHPMailer send call: `true` on success, `false` on failure.

**Action required:** If you have custom code or integrations that call `phpmail_send()` and assume it always succeeds, update that code to check the return value and handle `false` as a failure.

---

### 14. Email template preview rendered live HTML (Medium)

**What was vulnerable:**  
The email template preview rendered the template's HTML content directly in the browser, including any JavaScript embedded in the template. An administrator who had stored a malicious `<script>` tag in an email template could trigger XSS for any admin who viewed the preview.

**What changed:**  
The preview now displays the raw template source as plain text (`<pre>`-wrapped content with HTML encoding applied), so no HTML or JavaScript in the template is ever executed during preview.

**Action required:** None.

---

### 15. Path injection in PDF and XML generation (Medium)

**What was vulnerable:**  
The PDF generation helper and e-invoicing XML system included template and configuration files by constructing file paths from user-supplied or database-supplied identifiers. Without validation, path traversal sequences could cause unintended files to be included.

**What changed:**  
- `validate_template_name()` is called before any template file is included during PDF generation, checking against the static allow list.
- `is_valid_xml_config_id()` validates XML configuration identifiers using a character whitelist (alphanumeric, hyphens, underscores) and `realpath()` directory containment verification before any config file is loaded.
- If validation fails, a safe default template is used and the event is logged.

**Action required:** None.

---

### 16. Binary data corruption in Cryptor class (Low)

**CWE:** CWE-704

**What was vulnerable:**  
The `Cryptor` class used multibyte string functions (`mb_strlen`, `mb_substr`) on raw binary ciphertext. Multibyte functions interpret byte sequences as characters and can split or corrupt binary data when the bytes happen to form multibyte character sequences, causing IV corruption and decryption failures.

**What changed:**  
Replaced with byte-safe equivalents (`strlen`, `substr`) which always operate on raw bytes regardless of encoding.

**Action required:** None. Previously encrypted data will continue to decrypt correctly because the corruption was in the function choice, not in stored values.

---

### 17. GitHub Actions workflows had excessive token permissions (Low)

**CWE:** CWE-272

**What was vulnerable:**  
Workflow files did not declare explicit permission scopes, so the default GitHub Actions token was granted `contents: write` and other elevated permissions it did not need. A compromised workflow step could have used these permissions to modify repository contents.

**What changed:**  
All workflow files now declare `permissions: contents: read` at minimum scope. Additional permissions are granted explicitly only where required.

**Action required:** None for users. Only relevant if you have forked the repository and are running the workflows.

---

### 18. SVG logo uploads are now blocked (Info)

**What was vulnerable:**  
SVG is an XML format that can contain embedded JavaScript. An SVG file uploaded as a company logo and served directly from the web root would execute scripts in the browser of any user who accessed the logo URL directly.

**What changed:**  
SVG is removed from the allowed upload extensions list. The new allowed set is: `jpg`, `jpeg`, `png`, `gif`, `webp`. Any attempt to upload an `.svg` file is rejected with a validation error.

In addition, a `check_svg_logos()` method warns administrators on the settings page if any existing SVG logo files are found in the uploads directory.

**Action required:** If you currently use an SVG file as your company logo, you must replace it with a PNG, JPG, GIF, or WEBP version before or after upgrading. The existing SVG file will remain on disk but will no longer be served or usable through the application.

---

### 19. EXIF metadata stripping from uploaded images (Info — opt-in)

**What was added:**  
Images uploaded to InvoicePlane (logos, attachments) can contain EXIF metadata embedded by the camera or editing software. This metadata may include GPS coordinates, device identifiers, timestamps, and software version information — details that may be undesirable to expose.

A new option strips EXIF data from uploaded JPEG, PNG, GIF, and WEBP files immediately after upload. It is **disabled by default** to avoid unexpected behavior on servers without the required PHP extensions.

**New `ipconfig.php` setting:**

```ini
SEC_STRIP_EXIF_FROM_IMAGES=true
```

If stripping fails (e.g. because `exif_read_data` is not available), the upload is still accepted and a warning is logged — the upload is never blocked solely because EXIF removal failed.

**Action required:** None. Enable the setting if you want metadata stripping.

---

### 20. File upload filenames written to logs unsanitized (Info)

**What was vulnerable:**  
When a file upload was logged (success or failure), the original filename from the upload was written verbatim to the log file. A filename containing newlines could inject fake log entries.

**What changed:**  
All filenames are passed through `sanitize_for_logging()` before being written to any log, stripping newline and carriage-return characters.

**Action required:** None.

---

### 21. Setup wizard accessible after installation (Info)

**What was vulnerable:**  
The setup wizard (`/index.php/setup`) remained accessible after a completed installation. An attacker who reached the setup URL could potentially reconfigure database credentials or re-run migrations.

**What changed:**  
At the end of a successful installation, two flags are written to `ipconfig.php`:

```ini
SETUP_COMPLETED=true
DISABLE_SETUP=true
```

The setup controller checks `DISABLE_SETUP` in its constructor and returns HTTP 403 immediately if it is set. The database configuration step also checks `SETUP_COMPLETED` and refuses to proceed if setup has already run.

If writing to `ipconfig.php` fails, a warning is shown in the admin panel.

**Action required:** None for new installations. For existing installations upgrading from 1.6, the setup wizard will write these flags the first time you run database migrations during the upgrade.

---

### 22–26. Stored XSS in specific fields (Info)

The following individual fields were found to output values without HTML encoding in specific views. Each was fixed by wrapping the output with `htmlsc()`.

| # | Field | Location |
|---|---|---|
| 22 | Invoice number | `payments/views/form.php` lines 57 and 64 |
| 23 | Tax rate name | Tax rate list table and settings form |
| 24 | Payment method name | Payment method list view |
| 25 | Custom field values | Custom field forms and inline display |
| 26 | Family name | Product dropdown, families table, product modal, product table, product lookups |

All instances were audited as part of a broader review of 20+ locations where user-supplied content is displayed. The global `filter_input()` sanitization pass in `Admin_Controller` provides a second layer of defence for all of these.

**Action required:** None.

---

## Summary of new `ipconfig.php` settings

All new settings introduced in 1.7 for security purposes:

```ini
; Time in minutes before a password reset token expires (default: 15, max: 1440)
PASSWORD_RESET_TOKEN_EXPIRY_MINUTES=15

; Strip EXIF metadata from uploaded images (default: false)
SEC_STRIP_EXIF_FROM_IMAGES=false

; Path to custom templates directory outside web root (optional)
CUSTOM_TEMPLATES_FOLDER=/srv/invoiceplane-templates/

; Explicit allow lists for custom template names (comma-separated, no .php extension)
CUSTOM_INVOICE_TEMPLATES_PDF=
CUSTOM_INVOICE_TEMPLATES_PUBLIC=
CUSTOM_QUOTE_TEMPLATES_PDF=
CUSTOM_QUOTE_TEMPLATES_PUBLIC=
```

See [PDF Template Allow List](/en/1.7/templates/pdf-template-allowlist) for full details on the template settings.

See [Updating InvoicePlane](/en/1.7/getting-started/updating-ip) for the full upgrade procedure.
