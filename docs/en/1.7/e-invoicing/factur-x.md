# Factur-X and ZUGFeRD

Factur-X and ZUGFeRD are the same technical standard: a **PDF/A-3 document with a [CII](/en/1.7/e-invoicing/cii) XML file embedded inside**. The recipient receives one file that is both human-readable as a PDF and machine-processable as structured XML.

Both formats are built in to InvoicePlane 1.7 — no extra files need to be installed.

---

## Factur-X vs ZUGFeRD

| | Factur-X | ZUGFeRD |
|---|---|---|
| Origin | France (FNFE-MPE) | Germany (Forum elektronische Rechnung) |
| XML schema | CII D16B | CII D16B — identical |
| Profiles | MINIMUM, BASIC WL, BASIC, EN 16931, EXTENDED | Same profiles |
| Embedded XML filename | `factur-x.xml` | `ZUGFeRD-invoice.xml` |
| Conformance URN | `urn:factur-x.eu:1p0:{profile}` | `urn:factur-x.eu:1p0:{profile}` — same URN |

The two standards were deliberately harmonised. A ZUGFeRD 2.1 invoice is a valid Factur-X invoice and vice versa — the only distinguishing factor is the embedded filename and which country's accounting software expects which name.

In InvoicePlane:
- Use the **Factur-X** template for France (embedded filename: `factur-x.xml`)
- Use the **ZUGFeRD** template for Germany (embedded filename: `ZUGFeRD-invoice.xml`)

---

## Profiles

Both standards offer five profiles, each representing a different level of data completeness. A higher profile contains more structured data but requires more fields to be filled in on the invoice.

| Profile | Description | Typical use |
|---|---|---|
| **MINIMUM** | Basic invoice identification only — no line items, no tax breakdown | Archiving; not sufficient for processing |
| **BASIC WL** | Header-level totals and tax, no line items | Summary invoices |
| **BASIC** | Line items included but with limited detail | Simple invoices |
| **EN 16931** | Full EN 16931 compliance — all required and recommended fields | Standard business invoices (most common) |
| **EXTENDED** | EN 16931 plus optional extended fields | Complex invoices with logistics or project data |

**InvoicePlane's built-in templates use the EN 16931 profile.** This is the right choice for most business invoices and satisfies the mandatory e-invoicing requirements in Germany and France.

---

## How PDF embedding works

A PDF/A-3 document is a PDF that conforms to the ISO 19005-3 archival standard. Unlike regular PDFs, PDF/A-3 allows structured XML attachments to be embedded in the file's metadata in a way that software tools can reliably detect and extract.

InvoicePlane handles the PDF/A compliance and the RDF metadata that links the XML to the PDF automatically. You do not need to do anything extra — generate the invoice as usual, and the embedding happens behind the scenes.

The embedded file is visible in Adobe Acrobat Reader under:
> View → Show/Hide → Navigation Panes → Attachments

Third-party tools such as [Factur-X Python](https://github.com/akretion/factur-x) or [Mustang](https://www.mustangproject.org/) can extract and validate the embedded XML from the command line.

---

## Selecting the Factur-X profile on a client record

The InvoicePlane built-in templates are:

- **Factur-X EN16931** — for French clients; embedded filename `factur-x.xml`
- **ZUGFeRD 2.1 EN16931** — for German clients; embedded filename `ZUGFeRD-invoice.xml`

To switch to a different profile (for example MINIMUM or EXTENDED), you would need to [create a custom template](/en/1.7/e-invoicing/custom-templates) with the appropriate profile URN in the XML.

---

## Validation

Before sending, you can validate the XML output:

- **Mustang Project Validator** — validates ZUGFeRD and Factur-X XML against the official schema
- **Factur-X online validator** (FNFE-MPE) — French official validator
- **EN 16931 validation rules** — published by the European Commission, implemented in many tools

---

## Required client fields

See [Setup — Step 3](/en/1.7/e-invoicing/setup#step-3--fill-in-the-required-client-fields) for the base set of required fields. Factur-X and ZUGFeRD do not require any fields beyond the standard set.

---

## Related pages

- [CII](/en/1.7/e-invoicing/cii) — the underlying XML syntax
- [Germany country guide](/en/1.7/e-invoicing/country-germany) — ZUGFeRD for B2B; XRechnung for B2G
- [France country guide](/en/1.7/e-invoicing/country-france) — Factur-X for B2B; Chorus Pro for government
- [Custom XML templates](/en/1.7/e-invoicing/custom-templates) — how to create a template for a different profile
