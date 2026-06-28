# E-Invoicing

InvoicePlane 1.7 includes a built-in e-invoicing system that can generate structured XML files alongside or embedded in PDF invoices. This meets legal e-invoicing requirements in a growing number of countries.

For step-by-step setup instructions and country-specific guidance (Czech Republic, Belgium, Germany, France, Italy, Spain, Sweden), see [E-Invoicing by Country](/en/1.7/modules/e-invoicing-by-country).

## Supported Standards

| Standard | Format | Usage |
|---|---|---|
| **Factur-X / ZUGFeRD** | CII XML embedded in PDF/A | France, Germany, and other EU countries |
| **UBL** (Universal Business Language) | Standalone XML | Pan-European, used in many Peppol networks |
| **CII** (Cross Industry Invoice) | Standalone XML | International, basis of EN 16931 |

> **Note:**
> Peppol is a transport network, not a format. InvoicePlane generates the UBL or CII XML documents that Peppol networks carry. Submitting invoices to a Peppol access point requires a separate Peppol service provider that accepts your exported XML.

## Requirements

The following conditions must be met before e-invoicing can be used for a client:

**Client record must have:**
- Company name
- Street address, postal code, city
- Country
- Tax identification number (VAT number)

**Application settings:**
- The correct tax calculation mode must be configured (legacy calculation mode may be required for certain standards — see the configuration file for the specific XML template you are using)
- The client must have e-invoicing explicitly enabled on their client record

## Enabling E-Invoicing for a Client

1. Open the client record and navigate to the **E-Invoicing** section
2. Set **E-Invoicing active** to enabled
3. Select the e-invoicing standard from the **E-Invoicing version** dropdown — this list is populated from the available XML configuration files
4. Save the client record

Once enabled, the next invoice generated for this client will include the XML output according to the selected standard.

## Available XML Templates

The e-invoicing system is built around pairs of files:

| File | Location | Purpose |
|---|---|---|
| `[ShortID].php` | `application/helpers/XMLconfigs/` | Configuration — defines display name, country code, embed settings |
| `[ShortIDXml].php` | `application/libraries/XMLtemplates/` | Generator — produces the actual XML output |

The dropdown in the client record shows the `full-name` value from each configuration file. The files shipped with InvoicePlane cover Factur-X/ZUGFeRD. Additional implementations for other countries are available in the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

## Adding a Custom XML Template

To add support for a new e-invoicing format, create two files.

### 1. Configuration file

Create `application/helpers/XMLconfigs/MyFormatv10.php` (maximum 25 characters excluding extension, letters and numbers only):

```php
<?php
$xml_setting = [
    'full-name'   => 'My Country E-Invoice v1.0',
    'countrycode' => 'XX',
    'embedXML'    => true,        // embed XML inside the PDF
    'XMLname'     => 'invoice.xml', // filename used when embedding
];
```

Optional keys:

| Key | Type | Description |
|---|---|---|
| `generator` | string | Use a different generator filename than the default |
| `options` | mixed | Pass extra variables or codes to the generator |
| `legacy_calculation` | bool | Force legacy tax/discount calculation mode |

Dynamic filenames are supported using `{{{invoice_number}}}` as a placeholder in `XMLname`.

### 2. Generator file

Create `application/libraries/XMLtemplates/MyFormatv10Xml.php`. The generator class receives invoice data and must implement an `xml()` method returning the XML string. Use PHP's `DOMDocument` for building the output. See the existing Factur-X generator for a reference implementation.

## Factur-X / ZUGFeRD

Factur-X (France) and ZUGFeRD (Germany) are the same technical standard: a PDF/A-3 file with a CII XML attachment embedded in the PDF metadata. InvoicePlane handles the PDF/A compliance and RDF metadata automatically when `embedXML` is set to `true` in the configuration file.

The embedded XML filename for Factur-X is conventionally `factur-x.xml`; for ZUGFeRD it is `ZUGFeRD-invoice.xml`. Set `XMLname` accordingly in your configuration file.

## Peppol

Peppol is a network infrastructure for exchanging e-invoices between businesses and governments across Europe and beyond. The Peppol network requires invoices in **Peppol BIS Billing 3.0** format, which is a UBL 2.1 profile.

InvoicePlane can generate the UBL XML document. To send via Peppol you will additionally need:

1. A **Peppol access point** — a certified service provider that connects your system to the Peppol network
2. A **Peppol participant ID** — registered for your company in the Peppol directory (SML/SMP)

Contact a certified Peppol access point provider in your country to obtain these. Once you have them, export the UBL XML from InvoicePlane and submit it through your access point's API or upload interface.

## Required Client Fields Checklist

Before sending an e-invoice, confirm the following fields are filled in on the client record:

- [ ] Company name
- [ ] Street address
- [ ] Postal / ZIP code
- [ ] City
- [ ] Country
- [ ] Tax ID / VAT number
- [ ] E-invoicing enabled (toggle on client record)
- [ ] E-invoicing version selected

Missing required fields will prevent the XML from being generated. InvoicePlane displays a validation message listing which fields are absent.
