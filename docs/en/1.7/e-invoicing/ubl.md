# UBL — Universal Business Language

## What is UBL?

**UBL** (Universal Business Language) is an XML vocabulary developed by OASIS, the international open standards consortium. It defines a library of standard electronic business documents — invoices, orders, despatch advice, and many others — in a single, consistent XML format.

The version used in e-invoicing is **UBL 2.1**, published in 2013. UBL 2.1 is the syntax behind Peppol BIS Billing 3.0 and several national formats.

UBL is one of two XML syntaxes recognised by the European e-invoicing standard **EN 16931** (the other being [CII](/en/1.7/e-invoicing/cii)).

---

## Profiles and derivatives

UBL 2.1 is a broad specification. In practice, e-invoicing always uses a more tightly constrained **profile** that restricts which fields are mandatory and which values are allowed.

### Peppol BIS Billing 3.0

Peppol BIS Billing 3.0 (BIS = Business Interoperability Specification) is the most widely deployed UBL profile in Europe. It is a UBL 2.1 invoice constrained to full EN 16931 compliance, with additional Peppol-specific requirements.

This is the format you use when sending invoices over the [Peppol network](/en/1.7/e-invoicing/peppol). It is used for:

- B2G (business to government) in Belgium, Sweden, Czech Republic, Norway, Denmark, Finland, Austria, and many others
- B2B in Belgium (mandatory since January 2026) and increasingly common elsewhere

**Template in InvoicePlane:** `PeppolBISv3` — download from the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

### ISDOC — Czech national format

ISDOC is the Czech national e-invoice standard. Its XML structure is directly derived from UBL 2.1, extended with Czech-specific elements (for example, the Czech bank account number in IBAN/BBAN format and Czech tax identifiers). ISDOC invoices can be read by most Czech accounting and ERP software.

See the dedicated [ISDOC page](/en/1.7/e-invoicing/isdoc) for details.

### UBL.BE — Belgian UBL profile

Belgium uses a UBL profile called UBL.BE, which for e-invoicing is effectively identical to Peppol BIS Billing 3.0. When working with Belgian clients via Peppol, the Peppol BIS Billing 3.0 template covers the requirement.

---

## Key fields in a UBL invoice

UBL invoice documents follow this top-level structure:

```xml
<Invoice xmlns="urn:oasis:names:specification:ubl:schema:xsd:Invoice-2"
         xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2"
         xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2">

  <cbc:CustomizationID>urn:cen.eu:en16931:2017#compliant#urn:fdc:peppol.eu:2017:poacc:billing:3.0</cbc:CustomizationID>
  <cbc:ProfileID>urn:fdc:peppol.eu:2017:poacc:billing:01:1.0</cbc:ProfileID>
  <cbc:ID>INV-2025-0042</cbc:ID>
  <cbc:IssueDate>2025-06-01</cbc:IssueDate>
  <cbc:DueDate>2025-07-01</cbc:DueDate>
  <cbc:InvoiceTypeCode>380</cbc:InvoiceTypeCode>
  ...
  <cac:AccountingSupplierParty>...</cac:AccountingSupplierParty>
  <cac:AccountingCustomerParty>...</cac:AccountingCustomerParty>
  <cac:TaxTotal>...</cac:TaxTotal>
  <cac:LegalMonetaryTotal>...</cac:LegalMonetaryTotal>
  <cac:InvoiceLine>...</cac:InvoiceLine>
</Invoice>
```

The `CustomizationID` and `ProfileID` at the top identify which profile the document follows. InvoicePlane fills these automatically based on the template.

---

## When to use UBL

Choose UBL (Peppol BIS Billing 3.0) when:

- Your client or their country requires Peppol delivery
- You are invoicing a government body in Belgium, Sweden, Czech Republic, Norway, Denmark, Netherlands, Finland, or Austria
- You are a Belgian company invoicing any other Belgian company (mandatory from 2026)
- Your client specifically asks for UBL format

For Germany and France, [CII-based formats](/en/1.7/e-invoicing/cii) (ZUGFeRD / Factur-X) are the dominant choice.

---

## Related pages

- [Peppol](/en/1.7/e-invoicing/peppol) — transport network that carries UBL invoices
- [ISDOC](/en/1.7/e-invoicing/isdoc) — Czech national format derived from UBL
- [CII](/en/1.7/e-invoicing/cii) — the other major XML syntax for EN 16931
- [Country guides](/en/1.7/e-invoicing) — per-country standard choices
