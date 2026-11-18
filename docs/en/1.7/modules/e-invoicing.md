# E-Invoicing

InvoicePlane 1.7 includes a built-in e-invoicing system that generates structured XML alongside or embedded within PDF invoices.

The e-invoicing documentation is organised into dedicated sections covering standards, setup, and country-specific guidance.

---

## Where to start

- **[E-Invoicing overview](/en/1.7/e-invoicing)** — standards map, which format to use for your country, and links to all sub-pages
- **[Setup guide](/en/1.7/e-invoicing/setup)** — step-by-step: requirements, installing templates, enabling on a client, generating and delivering

---

## Standards

| Standard | Format | Built in | Page |
|---|---|---|---|
| Factur-X | CII embedded in PDF/A-3 | Yes | [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) |
| ZUGFeRD 2.x | CII embedded in PDF/A-3 | Yes | [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) |
| Peppol BIS Billing 3.0 | UBL 2.1 (via Peppol network) | Download | [Peppol](/en/1.7/e-invoicing/peppol) |
| XRechnung | Standalone CII | Download | [CII](/en/1.7/e-invoicing/cii) |
| ISDOC | UBL-derived (Czech national) | Download | [ISDOC](/en/1.7/e-invoicing/isdoc) |
| FatturaPA | Italian national format | Download | [FatturaPA](/en/1.7/e-invoicing/fatturaPA) |
| Facturae | Spanish national format | Download | [Facturae](/en/1.7/e-invoicing/facturae) |

---

## Country → standard

Each standard page includes worked examples for every country that uses it. See the [country lookup table](/en/1.7/e-invoicing#country--standard-lookup) on the overview page.

---

## Adding custom formats

See [Custom XML Templates](/en/1.7/e-invoicing/custom-templates) for instructions on adding any e-invoicing format using InvoicePlane's config + generator file pair system.
