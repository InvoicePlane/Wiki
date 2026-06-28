# Facturae — Spanish E-Invoice Format

## What is Facturae?

**Facturae** is the Spanish national e-invoice format, defined by the Spanish Tax Agency (AEAT) and the Ministry of Industry. It uses its own XML schema and is separate from the international UBL and CII standards.

The current version is **Facturae 3.2.1**, which has been the stable version since 2015. Version 3.2 is also still accepted by some portals.

---

## Legal requirement

### B2G (business to government)

E-invoicing via Facturae is **mandatory for all invoices to Spanish public administrations** (central government, regional governments, and local governments) since 2015. All such invoices must be submitted through the **FACe** portal or a compatible regional portal.

### B2B (business to business)

Private-sector B2B e-invoicing is being introduced in stages:
- Large companies (turnover > €8M): mandatory from 2025
- Medium and small companies: mandatory from 2026
- Micro-enterprises and freelancers: later phase (dates subject to change)

The B2B mandate uses an updated format called **Facturae B2B**, delivered via the **Verifactu** system or compatible platforms.

---

## Digital signature requirement

This is the most important difference between Facturae and other e-invoice formats: **Facturae files must be digitally signed** before submission. An unsigned Facturae XML is not legally valid.

The required signature format is **XAdES-EPES** (XML Advanced Electronic Signature — Explicitly Policy-related Electronic Signatures), using a qualified digital certificate issued by a recognised Spanish certification authority (FNMT, ACCV, Camerfirma, and others).

InvoicePlane generates the **unsigned** Facturae XML. You must sign it using a separate tool before uploading to FACe or sending to a B2B recipient.

**Signing tools:**

- **@firma** — free signing tool provided by the Spanish government
- **AutoFirma** — browser-integrated signing tool (Spanish government)
- **MiniApplet firma** — web-based signing via browser plugin
- Signing APIs offered by intermediary providers

---

## The FACe portal

**FACe** (Punto General de Entrada de Facturas Electrónicas de la Administración General del Estado) is the central e-invoice receiving portal for the Spanish central government and many regional administrations.

To submit via FACe:

1. Sign the Facturae XML using your digital certificate
2. Log in to [face.gob.es](https://face.gob.es) with your digital certificate
3. Upload the signed `.xsig` file
4. FACe validates the invoice and routes it to the relevant government department
5. You receive a reception acknowledgement; track the status in your FACe account

Regional governments may use their own portals (e.g. e.FACT in Catalonia, OVACEN in Valencia) but most also accept FACe.

---

## Facturae XML structure

Facturae uses a distinct XML namespace and structure:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<fe:Facturae xmlns:fe="http://www.facturae.gob.es/formato/Version3.2.1/Facturae_v3.2.1.xsd"
             xmlns:ds="http://www.w3.org/2000/09/xmldsig#">

  <FileHeader>
    <SchemaVersion>3.2.1</SchemaVersion>
    <Modality>I</Modality>  <!-- I=Individual, L=Batch -->
    <InvoiceIssuerType>EU</InvoiceIssuerType>
    <Batch>
      <BatchIdentifier>INV-2025-0001</BatchIdentifier>
      <InvoicesCount>1</InvoicesCount>
      <TotalInvoicesAmount>...</TotalInvoicesAmount>
    </Batch>
  </FileHeader>

  <Parties>
    <SellerParty>
      <TaxIdentification>
        <PersonTypeCode>J</PersonTypeCode>  <!-- J=Legal entity, F=Individual -->
        <ResidenceTypeCode>R</ResidenceTypeCode>  <!-- R=Resident -->
        <TaxIdentificationNumber>ESB12345678</TaxIdentificationNumber>
      </TaxIdentification>
      <LegalEntity>...</LegalEntity>
    </SellerParty>
    <BuyerParty>...</BuyerParty>
  </Parties>

  <Invoices>
    <Invoice>
      <InvoiceHeader>
        <InvoiceNumber>2025-0001</InvoiceNumber>
        <InvoiceSeriesCode>INV</InvoiceSeriesCode>
        <InvoiceDocumentType>FC</InvoiceDocumentType>  <!-- FC=Invoice -->
        <InvoiceClass>OO</InvoiceClass>  <!-- OO=Original -->
        <InvoiceIssueData>...</InvoiceIssueData>
      </InvoiceHeader>
      <TaxesOutputs>...</TaxesOutputs>
      <InvoiceTotals>...</InvoiceTotals>
      <Items>...</Items>
      <PaymentDetails>...</PaymentDetails>
    </Invoice>
  </Invoices>

</fe:Facturae>
```

The digital signature is attached to the document root after signing, adding a `<ds:Signature>` block.

---

## InvoicePlane template

**Template name:** `FacturaeV321` (or similar) — download from the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

The template generates unsigned XML. You sign it separately before submitting.

---

## Required client fields for Facturae

In addition to the [standard required fields](/en/1.7/e-invoicing/setup#step-3--fill-in-the-required-client-fields):

| Field | Notes |
|---|---|
| Tax ID / VAT number | Spanish NIF/VAT: `ES` + 9 characters (letter, 7 digits, letter or digit). Example: `ESB12345678` |
| Official supplier code (DIR3) | Required for B2G invoices. Three codes identify the administrative unit: Órgano gestor, Unidad tramitadora, Oficina contable. Ask the government entity for their DIR3 codes. |

DIR3 codes for B2G invoices are provided by the contracting authority in the purchase order or contract. Without them, FACe cannot route the invoice to the correct department.

---

## Peppol as an alternative

For cross-border invoices to foreign clients, Peppol BIS Billing 3.0 is simpler than Facturae and does not require a digital signature. Use Facturae specifically for Spanish B2G and B2B domestic invoices.

---

## Related pages

- [Spain country guide](/en/1.7/e-invoicing/country-spain)
- [Peppol](/en/1.7/e-invoicing/peppol) — for cross-border invoices from Spain
- [Setup guide](/en/1.7/e-invoicing/setup)
