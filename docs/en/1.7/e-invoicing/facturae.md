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

For cross-border invoices to foreign clients, Peppol BIS Billing 3.0 is simpler than Facturae and does not require a digital signature. Use Facturae specifically for Spanish B2G and domestic B2B invoices.

---

## Examples

All examples use the **`FacturaeV321`** template. The signing step after generating the XML applies to every Facturae invoice.

Spanish VAT numbers (**NIF/CIF**) start with `ES` followed by 9 characters.

| Entity type | Format | Example |
|---|---|---|
| Legal entity (CIF) | `ES` + letter + 7 digits + letter/digit | `ESB12345678` |
| Individual (NIF) | `ES` + 8 digits + letter | `ES12345678Z` |
| Foreign entity (NIE) | `ES` + X/Y/Z + 7 digits + letter | `ESX1234567Z` |

---

### B2G invoice — Spanish central government via FACe

DIR3 codes are required. They are always provided in the purchase order from the contracting authority.

| Field | Value |
|---|---|
| Company name | Agencia Estatal de Administración Tributaria |
| Street address | Calle Alcalá 5 |
| Postal code | 28014 |
| City | Madrid |
| Country | Spain |
| Tax ID / VAT number | ESQ2826004J |
| Órgano gestor (DIR3) | E00120001 |
| Unidad tramitadora (DIR3) | E00120101 |
| Oficina contable (DIR3) | E00120102 |
| E-Invoicing version | Facturae 3.2.1 |

**Delivery:**
1. Generate XML in InvoicePlane
2. Open AutoFirma, load the XML, sign with your certificate — produces a `.xsig` file
3. Log in to [face.gob.es](https://face.gob.es) and upload the `.xsig`
4. Note the tracking number for status follow-up

---

### B2G invoice — Spanish municipality

Municipalities are on FACe too. The DIR3 codes for each municipality are in the [DIR3 directory](https://administracionelectronica.gob.es/ctt/dir3).

| Field | Value |
|---|---|
| Company name | Ayuntamiento de Barcelona |
| Street address | Plaça de Sant Jaume 1 |
| Postal code | 08002 |
| City | Barcelona |
| Country | Spain |
| Tax ID / VAT number | ESP0801933J |
| Órgano gestor (DIR3) | L01080193 |
| Unidad tramitadora (DIR3) | L01080193 |
| Oficina contable (DIR3) | L01080193 |
| E-Invoicing version | Facturae 3.2.1 |

---

### B2B invoice — Spanish private company

The Verifactu system (B2B mandate from 2025/2026) uses Facturae. The signing requirement is the same.

| Field | Value |
|---|---|
| Company name | García Construcciones SL |
| Street address | Calle Mayor 5 |
| Postal code | 28013 |
| City | Madrid |
| Country | Spain |
| Tax ID / VAT number | ESB12345678 |
| E-Invoicing version | Facturae 3.2.1 |

**Delivery:** Sign the XML with AutoFirma and send the `.xsig` file to the client by email or via a B2B e-invoicing platform. The client's accounting software imports the signed XML directly.

---

### B2G invoice — Catalonia regional government via e.FACT

Catalonia has its own portal, [e.FACT](https://efact.eacat.cat), which accepts Facturae. The workflow is the same as FACe — sign, then upload. DIR3 codes still apply.

| Field | Value |
|---|---|
| Company name | Departament de Salut, Generalitat de Catalunya |
| Street address | Travessera de les Corts 131-159 |
| Postal code | 08028 |
| City | Barcelona |
| Country | Spain |
| Tax ID / VAT number | ESQ0801175A |
| Órgano gestor (DIR3) | A09018933 |
| Unidad tramitadora (DIR3) | A09018933 |
| Oficina contable (DIR3) | A09018933 |
| E-Invoicing version | Facturae 3.2.1 |

---

### Cross-border invoice from Spain — use Peppol instead

For invoices to foreign clients (EU or otherwise), use Peppol BIS Billing 3.0. It requires no digital signature and is delivered via the Peppol network. See [Peppol](/en/1.7/e-invoicing/peppol).

---

## Related pages

- [Peppol](/en/1.7/e-invoicing/peppol) — for cross-border invoices from Spain
- [Setup guide](/en/1.7/e-invoicing/setup)
