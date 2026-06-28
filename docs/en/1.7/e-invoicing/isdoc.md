# ISDOC — Czech E-Invoice Format

## What is ISDOC?

**ISDOC** (Information System Document) is the Czech national e-invoice format. It was developed by the Czech Chamber of Commerce and the Czech software industry consortium (ICT Unie) and has been in use since 2009.

ISDOC is based on **UBL 2.1** — it uses the UBL XML schema as its foundation and adds Czech-specific extensions for local tax identifiers, bank account formats, and other requirements. This means any software that can process UBL 2.1 can generally read an ISDOC invoice with minimal adaptation.

The current version is **ISDOC 6.0.1**.

---

## Who uses ISDOC?

ISDOC is the format of choice for domestic **B2B** invoices between Czech companies. It is natively supported by the dominant Czech accounting and ERP software packages, including:

- POHODA (Stormware)
- Money S3 / Money S4 (Seyfor)
- Helios (Asseco)
- Abra
- Pohoda
- FlexiBee

Sending invoices as ISDOC XML allows your clients to import them directly into their accounting system without manually re-entering the data.

---

## ISDOC vs Peppol — which to use?

| Situation | Format |
|---|---|
| B2B domestic invoice to a Czech company | ISDOC |
| B2G invoice to a Czech government entity | Peppol BIS Billing 3.0 (via NIPEZ) |
| B2B cross-border invoice to a foreign company | Peppol BIS Billing 3.0 |
| Czech company invoicing in the EU on Peppol | Peppol BIS Billing 3.0 |

The Czech government's public procurement portal NIPEZ accepts both ISDOC and Peppol BIS Billing 3.0 for B2G submissions, but Peppol BIS Billing 3.0 is the recommended standard for new implementations.

---

## ISDOC structure

ISDOC uses UBL 2.1 namespaces with an additional ISDOC namespace for extensions. A simplified example:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<Invoice xmlns="urn:oasis:names:specification:ubl:schema:xsd:Invoice-2"
         xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2"
         xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2"
         xmlns:isdoc="http://isdoc.cz/namespace/2013">

  <cbc:CustomizationID>ISDOC:6.0.1</cbc:CustomizationID>
  <cbc:ID>INV-2025-0001</cbc:ID>
  <cbc:IssueDate>2025-06-01</cbc:IssueDate>
  <cbc:InvoiceTypeCode>380</cbc:InvoiceTypeCode>
  ...
  <!-- Czech-specific: bank account -->
  <isdoc:LocalAccountNumber>123456-0987654321/0800</isdoc:LocalAccountNumber>
  ...
</Invoice>
```

---

## InvoicePlane template

**Template name:** `ISDOCv6` (or similar) — download from the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

Install the two files (config + generator) as described in [Setup — Step 2](/en/1.7/e-invoicing/setup#step-2--install-additional-xml-templates).

---

## Required client fields for ISDOC

In addition to the [standard required fields](/en/1.7/e-invoicing/setup#step-3--fill-in-the-required-client-fields):

| Field | Notes |
|---|---|
| Tax ID / VAT number | Czech VAT number: `CZ` followed by 8–10 digits. Example: `CZ12345678` |
| Czech business ID (IČO) | 8-digit company registration number. Example: `12345678` — enter in the custom fields if available |

Czech companies have two identifiers:
- **DIČ** (Daňové identifikační číslo) — the VAT number, starts with `CZ`. This is the standard Tax ID / VAT number field.
- **IČO** (Identifikační číslo osoby) — the company registration number, 8 digits, no prefix. Some ISDOC validators require this.

---

## Delivering an ISDOC invoice

ISDOC files are typically sent directly to the recipient:

- **By email** — attach the `.isdoc` XML file (and optionally a PDF) to your email
- **Via a data box (datová schránka)** — Czech government-mandated secure messaging system. Many larger Czech companies use data boxes for business document exchange.
- **Via a B2B platform** — some Czech e-invoicing platforms (e.g. eDoklady, Ariba) accept ISDOC uploads

There is no central hub for ISDOC the way Italy has SdI. The recipient imports the XML directly into their accounting software.

---

## Related pages

- [Czech Republic country guide](/en/1.7/e-invoicing/country-czech-republic) — both ISDOC and Peppol in context
- [UBL](/en/1.7/e-invoicing/ubl) — the underlying XML syntax ISDOC derives from
- [Peppol](/en/1.7/e-invoicing/peppol) — for B2G and cross-border invoices from Czech Republic
