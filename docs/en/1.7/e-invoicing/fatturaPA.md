# FatturaPA — Italian E-Invoice Format

## What is FatturaPA?

**FatturaPA** (Fattura Pubblica Amministrazione, literally "public administration invoice") is Italy's mandatory national e-invoice format. Despite the name, it is used for **all** domestic B2B and B2C invoices in Italy — not just government invoices.

FatturaPA uses its own XML schema defined by the Italian Revenue Agency (Agenzia delle Entrate). It is not derived from UBL or CII.

---

## Legal requirement

E-invoicing via FatturaPA is **mandatory for all VAT-registered Italian businesses** for:

- B2B domestic invoices (since 1 January 2019)
- B2G invoices (since 2015)
- B2C invoices (since 2019 for private individuals too)

Failure to issue invoices in FatturaPA format results in tax penalties. There is no opt-out.

Foreign companies invoicing Italian customers are not legally required to use FatturaPA (they are not Italian VAT-registered), but many Italian clients will request it for easier processing.

---

## The SdI system

FatturaPA invoices are not sent directly to the customer. They must go through the **SdI** (Sistema di Interscambio — Interchange System), the Italian Revenue Agency's document hub.

The flow:

```
[Sender]  ──▶  [SdI]  ──▶  [Recipient]
               validates    forwards
               signs         (or rejects)
               timestamps
```

1. You submit the FatturaPA XML to SdI (directly or via a certified intermediary)
2. SdI validates the document and affixes a digital receipt timestamp
3. SdI forwards the invoice to the recipient using their routing address (codice destinatario or PEC)
4. SdI notifies you of acceptance or rejection within 5 business days
5. A rejected invoice must be corrected and resubmitted

**The SdI validation is legally binding.** An invoice that was not routed through SdI does not exist for tax purposes.

---

## Routing the invoice to the recipient

To route the invoice, SdI needs the recipient's address. There are two options:

### Codice destinatario

A **codice destinatario** is a 7-character alphanumeric code assigned to a company's SdI inbox. Large companies and intermediary service providers have one. Ask your Italian client for their codice destinatario before generating the first invoice.

Example: `ABC1234`

If the client gives you `0000000` (seven zeros), they use a PEC address instead.

### PEC (Posta Elettronica Certificata)

A **PEC** is a certified email address. FatturaPA invoices can be routed to a company's PEC address as an alternative to the codice destinatario. Ask your client which they prefer.

Example: `fatture@pec.azienda.it`

---

## FatturaPA XML structure

FatturaPA has a different XML structure from UBL or CII:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<p:FatturaElettronica xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2"
    versione="FPR12">

  <FatturaElettronicaHeader>
    <DatiTrasmissione>
      <IdTrasmittente>
        <IdPaese>IT</IdPaese>
        <IdCodice>12345678901</IdCodice>
      </IdTrasmittente>
      <ProgressivoInvio>00001</ProgressivoInvio>
      <FormatoTrasmissione>FPR12</FormatoTrasmissione>
      <CodiceDestinatario>ABC1234</CodiceDestinatario>
    </DatiTrasmissione>
    <CedentePrestatore>...</CedentePrestatore>  <!-- Seller -->
    <CessionarioCommittente>...</CessionarioCommittente>  <!-- Buyer -->
  </FatturaElettronicaHeader>

  <FatturaElettronicaBody>
    <DatiGenerali>
      <DatiGeneraliDocumento>
        <TipoDocumento>TD01</TipoDocumento>  <!-- Invoice type -->
        <Divisa>EUR</Divisa>
        <Data>2025-06-01</Data>
        <Numero>INV-2025-0001</Numero>
      </DatiGeneraliDocumento>
    </DatiGenerali>
    <DatiBeniServizi>...</DatiBeniServizi>  <!-- Line items -->
    <DatiPagamento>...</DatiPagamento>  <!-- Payment info -->
  </FatturaElettronicaBody>

</p:FatturaElettronica>
```

The `TipoDocumento` code identifies the document type:
- `TD01` — standard invoice
- `TD04` — credit note
- `TD05` — debit note

---

## InvoicePlane template

**Template name:** `FatturaPAv12` (or similar) — download from the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

This template generates a standalone XML file. It does **not** embed XML in a PDF — SdI accepts only the XML file.

---

## Required client fields for FatturaPA

In addition to the [standard required fields](/en/1.7/e-invoicing/setup#step-3--fill-in-the-required-client-fields):

| Field | Notes |
|---|---|
| Tax ID / VAT number | Italian VAT number (Partita IVA): `IT` followed by 11 digits. Example: `IT12345678901` |
| Codice destinatario | 7 alphanumeric characters. Use `0000000` if the client uses PEC instead |
| PEC address | Certified email for routing; only required if codice destinatario is `0000000` |
| Codice fiscale | Fiscal code (16 chars for individuals; same as Partita IVA for companies); required for B2C |

---

## Submitting to SdI

You have two options:

### Via a certified intermediary (recommended)

An intermediary (intermediario) is a service provider certified by the Italian Revenue Agency. They accept your FatturaPA XML and handle the SdI submission, error handling, and storage on your behalf. Most Italian accounting software providers and many European SaaS platforms offer this service.

### Direct submission

You can submit directly to SdI via:
- The **Fatture e Corrispettivi** web portal (portal.agenziaentrate.gov.it) — manual upload
- The **SdI API** — requires a qualified digital certificate (firma digitale) for authentication

Direct submission is practical only if you are an Italian VAT-registered business or have an Italian digital certificate.

---

## Storage obligations

Italian law requires you to store FatturaPA invoices for at least **10 years**. SdI stores invoices for 15 years; you can retrieve them from the portal if needed. Many intermediary services include long-term archival.

---

## Related pages

- [Italy country guide](/en/1.7/e-invoicing/country-italy)
- [CII](/en/1.7/e-invoicing/cii) — for comparison: the international CII-based formats
- [Setup guide](/en/1.7/e-invoicing/setup)
