# E-Invoicing

E-invoicing in InvoicePlane means generating structured XML data alongside or embedded within PDF invoices. This XML is machine-readable, which allows receiving companies and government portals to import it directly into their accounting systems without manual data entry.

---

## Standards landscape

E-invoicing standards come in two layers: the **syntax** (the XML format) and the **transport** (how the file reaches the other party). InvoicePlane generates the XML; transport is a separate step that varies by country.

### Syntax standards

There are two international XML syntaxes and several national formats derived from them.

```
UBL (Universal Business Language — OASIS)
├── Peppol BIS Billing 3.0    profile used on the Peppol network
├── ISDOC                     Czech national format (UBL-derived)
└── UBL.BE                    Belgian profile (essentially Peppol BIS)

CII (Cross Industry Invoice — UN/CEFACT)
├── Factur-X                  France — CII embedded inside a PDF/A-3 file
├── ZUGFeRD 2.x               Germany — identical to Factur-X, different embedded filename
└── XRechnung                 Germany (B2G only) — standalone CII, not embedded

National proprietary formats
├── FatturaPA                 Italy — mandatory for all domestic invoices, own XML schema
└── Facturae                  Spain — B2G, own XML schema, requires digital signature
```

### EN 16931 — the European semantic standard

EN 16931 is the European standard that defines **what data an invoice must contain**. It does not define the XML format; it can be expressed in either UBL or CII syntax. Peppol BIS Billing 3.0, Factur-X, ZUGFeRD, and XRechnung are all EN 16931-compliant profiles — they differ in syntax and additional rules but share the same core data model.

### Transport

Peppol is the main transport network for EU e-invoicing. It carries UBL or CII documents between certified access points. Italy (SdI) and Spain (FACe) have their own national delivery hubs with different submission procedures.

---

## Which format do I need?

| Situation | Format to use |
|---|---|
| Invoicing a German company (B2B) | [ZUGFeRD 2.x](/en/1.7/e-invoicing/factur-x) |
| Invoicing the German government (B2G) | [XRechnung](/en/1.7/e-invoicing/cii) via OZG-RE portal |
| Invoicing a French company | [Factur-X](/en/1.7/e-invoicing/factur-x) |
| Invoicing any company via the Peppol network | [Peppol BIS Billing 3.0](/en/1.7/e-invoicing/peppol) |
| Invoicing in Belgium (mandatory since 2026) | [Peppol BIS Billing 3.0](/en/1.7/e-invoicing/peppol) |
| Invoicing in Sweden (B2G mandatory) | [Peppol BIS Billing 3.0](/en/1.7/e-invoicing/peppol) |
| Invoicing in Italy (mandatory for all domestic) | [FatturaPA](/en/1.7/e-invoicing/fatturaPA) via SdI |
| Invoicing the Spanish government (B2G) | [Facturae](/en/1.7/e-invoicing/facturae) via FACe |
| Invoicing a Czech company (B2B domestic) | [ISDOC](/en/1.7/e-invoicing/isdoc) |
| Invoicing the Czech government (B2G) | [Peppol BIS Billing 3.0](/en/1.7/e-invoicing/peppol) via NIPEZ |

---

## Documentation sections

### Setup and configuration

- [Setup guide](/en/1.7/e-invoicing/setup) — requirements, installing templates, enabling e-invoicing on a client, generating and verifying output
- [Custom XML templates](/en/1.7/e-invoicing/custom-templates) — how to create your own format using the config + generator file pair

### Standards reference

- [UBL](/en/1.7/e-invoicing/ubl) — Universal Business Language; the syntax behind Peppol BIS Billing 3.0 and ISDOC
- [CII](/en/1.7/e-invoicing/cii) — Cross Industry Invoice; the syntax behind Factur-X, ZUGFeRD, and XRechnung
- [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) — CII XML embedded inside a PDF/A-3 file; built-in templates
- [Peppol](/en/1.7/e-invoicing/peppol) — the EU transport network; access points, participant IDs, the four-corner model
- [ISDOC](/en/1.7/e-invoicing/isdoc) — Czech national format derived from UBL
- [FatturaPA](/en/1.7/e-invoicing/fatturaPA) — Italy's mandatory national format and SdI submission hub
- [Facturae](/en/1.7/e-invoicing/facturae) — Spain's national format and FACe portal

### Country guides

Each guide explains which standards apply, example client records with correct VAT number formats, and how to deliver the invoice.

- [Czech Republic](/en/1.7/e-invoicing/country-czech-republic)
- [Belgium](/en/1.7/e-invoicing/country-belgium)
- [Germany](/en/1.7/e-invoicing/country-germany)
- [France](/en/1.7/e-invoicing/country-france)
- [Italy](/en/1.7/e-invoicing/country-italy)
- [Spain](/en/1.7/e-invoicing/country-spain)
- [Sweden](/en/1.7/e-invoicing/country-sweden)
