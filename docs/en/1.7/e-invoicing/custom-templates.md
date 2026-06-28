# Custom XML Templates

InvoicePlane's e-invoicing system is built around pairs of files: one that describes the format and one that generates the XML. This makes it straightforward to add support for any e-invoicing standard that isn't already covered by the built-in templates or the community repository.

---

## The two-file system

Each e-invoicing format requires two files:

| File | Location | Role |
|---|---|---|
| Configuration file | `application/helpers/XMLconfigs/` | Tells InvoicePlane how to display and handle this format |
| Generator file | `application/libraries/XMLtemplates/` | Produces the actual XML output |

Both files use the same **short identifier** as their base name. The generator adds `Xml` before the extension. For a format identified as `MyFormatv10`:

- Config: `application/helpers/XMLconfigs/MyFormatv10.php`
- Generator: `application/libraries/XMLtemplates/MyFormatv10Xml.php`

The short identifier can be up to 25 characters, letters and numbers only, no spaces or special characters.

---

## Configuration file

Create `application/helpers/XMLconfigs/MyFormatv10.php`:

```php
<?php
$xml_setting = [
    'full-name'   => 'My Country E-Invoice v1.0',
    'countrycode' => 'XX',
    'embedXML'    => false,
    'XMLname'     => 'invoice.xml',
];
```

### Required keys

| Key | Type | Description |
|---|---|---|
| `full-name` | string | Display name shown in the E-Invoicing version dropdown on client records |
| `countrycode` | string | ISO 3166-1 alpha-2 country code (e.g. `DE`, `FR`, `CZ`, `IT`) |
| `embedXML` | bool | `true` = embed XML inside a PDF/A-3; `false` = produce standalone XML |
| `XMLname` | string | Filename for the XML file; used as the embedded attachment name when `embedXML` is `true` |

### Optional keys

| Key | Type | Description |
|---|---|---|
| `generator` | string | Override the generator filename (default: `{ShortID}Xml.php`) |
| `options` | mixed | Pass additional configuration values to the generator |
| `legacy_calculation` | bool | Force legacy tax and discount calculation mode |

### Dynamic filenames

You can include `{{{invoice_number}}}` in `XMLname` to embed the invoice number in the filename:

```php
'XMLname' => 'invoice-{{{invoice_number}}}.xml',
```

### Embedding into PDF/A-3

When `embedXML` is `true`, InvoicePlane generates a PDF/A-3 archive file and attaches the XML inside it according to the ISO 19005-3 standard, including the required XMP metadata. This is the mechanism used by Factur-X and ZUGFeRD. The `XMLname` value becomes the filename of the attachment inside the PDF.

---

## Generator file

Create `application/libraries/XMLtemplates/MyFormatv10Xml.php`:

```php
<?php

class MyFormatv10Xml
{
    public function xml(array $invoice, array $client, array $items, array $options = []): string
    {
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->formatOutput = true;

        $root = $dom->createElementNS('urn:example:myformat:1.0', 'Invoice');
        $dom->appendChild($root);

        // Invoice number
        $id = $dom->createElement('ID', htmlspecialchars($invoice['invoice_number']));
        $root->appendChild($id);

        // Issue date
        $date = $dom->createElement('IssueDate', $invoice['invoice_date_created']);
        $root->appendChild($date);

        // ... add all required elements

        return $dom->saveXML();
    }
}
```

### Method signature

The generator class must have a public `xml()` method. InvoicePlane calls it with:

| Parameter | Type | Contents |
|---|---|---|
| `$invoice` | array | Invoice header data (number, date, totals, tax amounts, currency, etc.) |
| `$client` | array | Client record (name, address, VAT number, e-invoicing fields) |
| `$items` | array | Array of line items (description, quantity, unit price, tax rate, line total) |
| `$options` | array | Values from the `options` key in the config file, if any |

The method must return the XML string.

### Using DOMDocument

PHP's built-in `DOMDocument` class is recommended for building XML. It handles character encoding, namespace declarations, and well-formedness automatically. Avoid building XML by string concatenation — it is easy to produce invalid or unescaped output.

### Reference implementations

Study the built-in templates before writing your own:

- `application/libraries/XMLtemplates/FacturXv1Xml.php` — Factur-X EN16931 (CII + PDF/A embedding)
- `application/libraries/XMLtemplates/ZUGFeRDv21Xml.php` — ZUGFeRD 2.1 EN16931

Community templates in the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices) cover Peppol BIS Billing 3.0, ISDOC, FatturaPA, Facturae, and XRechnung.

---

## Testing your template

1. Create a test client with all required fields filled in
2. Enable e-invoicing on the client and select your new template
3. Create a test invoice
4. Download the PDF (for embedded formats) or the XML file (for standalone formats)
5. Validate the output using the appropriate schema validator for your format:
   - Peppol BIS Billing 3.0: [OpenPeppol Validator](https://peppol.org/technical-documentation/)
   - ZUGFeRD / Factur-X: [Mustang Project Validator](https://www.mustangproject.org/validator/)
   - XRechnung: [KoSIT Validator](https://projekte.kosit.org/kosit/validator)
   - FatturaPA: the [Fatture e Corrispettivi portal](https://ivaservizi.agenziaentrate.gov.it) has a built-in validator
   - Facturae: the Spanish [AEAT Facturae validator](https://www.facturae.gob.es)

---

## Sharing your template

If your template may be useful to other InvoicePlane users, consider contributing it to the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices) via a pull request.

---

## Related pages

- [E-invoicing overview](/en/1.7/e-invoicing) — standards map
- [Setup guide](/en/1.7/e-invoicing/setup) — installing templates
- [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) — built-in template reference
