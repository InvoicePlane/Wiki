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

Each standard page includes worked examples covering every country where that standard is used.

- [UBL](/en/1.7/e-invoicing/ubl) — Universal Business Language; the syntax behind Peppol BIS Billing 3.0 and ISDOC
- [CII](/en/1.7/e-invoicing/cii) — Cross Industry Invoice; the syntax behind Factur-X, ZUGFeRD, and XRechnung; includes XRechnung examples (Germany B2G)
- [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) — CII embedded in PDF/A-3; built-in templates; includes examples for Germany (ZUGFeRD B2B), France (Factur-X B2B and Chorus Pro B2G), Austria
- [Peppol](/en/1.7/e-invoicing/peppol) — the EU transport network; includes examples for Belgium, Sweden, Czech Republic (B2G), Netherlands, Norway, Finland
- [ISDOC](/en/1.7/e-invoicing/isdoc) — Czech national format; includes examples for s.r.o., a.s., and OSVČ clients
- [FatturaPA](/en/1.7/e-invoicing/fatturaPA) — Italy's mandatory format and SdI hub; includes examples for B2B (codice destinatario and PEC), B2G (central and municipal), and B2C
- [Facturae](/en/1.7/e-invoicing/facturae) — Spain's national format and FACe portal; includes examples for central government, municipality, private company, and Catalonia regional portal

---

## Country → standard lookup

| Country | Scenario | Standard | Page |
|---|---|---|---|
| Czech Republic | B2B domestic | ISDOC | [ISDOC](/en/1.7/e-invoicing/isdoc) |
| Czech Republic | B2G (NIPEZ) | Peppol BIS Billing 3.0 | [Peppol](/en/1.7/e-invoicing/peppol) |
| Czech Republic | Cross-border | Peppol BIS Billing 3.0 | [Peppol](/en/1.7/e-invoicing/peppol) |
| Belgium | B2G and B2B (mandatory from 2026) | Peppol BIS Billing 3.0 | [Peppol](/en/1.7/e-invoicing/peppol) |
| Germany | B2B domestic | ZUGFeRD 2.1 EN16931 | [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) |
| Germany | B2G (federal and state) | XRechnung | [CII](/en/1.7/e-invoicing/cii) |
| France | B2B | Factur-X EN16931 | [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) |
| France | B2G (Chorus Pro) | Factur-X EN16931 | [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) |
| Italy | B2B, B2G, B2C | FatturaPA via SdI | [FatturaPA](/en/1.7/e-invoicing/fatturaPA) |
| Spain | B2G (FACe and regional portals) | Facturae 3.2.1 | [Facturae](/en/1.7/e-invoicing/facturae) |
| Spain | B2B domestic | Facturae 3.2.1 | [Facturae](/en/1.7/e-invoicing/facturae) |
| Spain | Cross-border | Peppol BIS Billing 3.0 | [Peppol](/en/1.7/e-invoicing/peppol) |
| Sweden | B2G (mandatory) and B2B | Peppol BIS Billing 3.0 | [Peppol](/en/1.7/e-invoicing/peppol) |
| Netherlands | B2G (mandatory) | Peppol BIS Billing 3.0 | [Peppol](/en/1.7/e-invoicing/peppol) |
| Norway | B2G (mandatory) | Peppol BIS Billing 3.0 | [Peppol](/en/1.7/e-invoicing/peppol) |
| Finland | B2G (mandatory) | Peppol BIS Billing 3.0 | [Peppol](/en/1.7/e-invoicing/peppol) |
| Austria | B2G | Peppol BIS Billing 3.0 | [Peppol](/en/1.7/e-invoicing/peppol) |
