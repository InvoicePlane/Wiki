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

## Examples

All examples use the **`FatturaPAv12`** template. The Partita IVA format (`IT` + 11 digits) is consistent across all entity types; what changes is the routing address (codice destinatario vs PEC) and the document type.

Italian VAT numbers (**Partita IVA**) start with `IT` followed by 11 digits.

---

### B2B invoice — routing via codice destinatario

Most companies that regularly receive e-invoices have a 7-character codice destinatario registered with SdI. Ask your client for it before generating the first invoice.

| Field | Value |
|---|---|
| Company name | Bianchi S.r.l. |
| Street address | Via Roma 10 |
| Postal code | 00100 |
| City | Roma |
| Country | Italy |
| Tax ID / VAT number | IT12345678901 |
| Codice destinatario | XJ5ETH7 |
| E-Invoicing version | FatturaPA v1.2 |

**Delivery:** Submit the XML via your SdI intermediary or the Fatture e Corrispettivi portal. SdI routes it directly to the client's SdI inbox.

---

### B2B invoice — routing via PEC (certified email)

Smaller companies may not have a codice destinatario. Enter `0000000` in that field and fill in their PEC address instead. SdI delivers to the PEC.

| Field | Value |
|---|---|
| Company name | Studio Rossi SRL |
| Street address | Corso Umberto I 15 |
| Postal code | 20121 |
| City | Milano |
| Country | Italy |
| Tax ID / VAT number | IT98765432109 |
| Codice destinatario | 0000000 |
| PEC address | studio.rossi@pec.it |
| E-Invoicing version | FatturaPA v1.2 |

---

### B2B invoice — client not registered with SdI

Enter `0000000` for the codice destinatario and leave PEC blank. SdI marks the invoice as delivered and the client must retrieve it themselves from the SdI web area using their tax credentials. This is the fallback for clients who are slow to set up SdI routing.

| Field | Value |
|---|---|
| Company name | Artigiano Verdi |
| Codice destinatario | 0000000 |
| PEC address | (leave blank) |
| E-Invoicing version | FatturaPA v1.2 |

---

### B2G invoice — Italian central government

Government entities have a **codice IPA** (from the IPA directory) that maps to their SdI inbox. The codice IPA is also a 6-character alphanumeric code and is used as the codice destinatario for public administration.

| Field | Value |
|---|---|
| Company name | Ministero dell'Economia e delle Finanze |
| Street address | Via XX Settembre 97 |
| Postal code | 00187 |
| City | Roma |
| Country | Italy |
| Tax ID / VAT number | IT97735020584 |
| Codice destinatario | UFUHP5 |
| Codice CIG / CUP | CIG: 12345678AB (from contract) |
| E-Invoicing version | FatturaPA v1.2 |

**CIG/CUP codes:** Public procurement invoices must include the CIG (Codice Identificativo Gara, from the tender) and/or CUP (Codice Unico di Progetto, from the project). These are provided in the purchase order. Without them, the government entity will reject the invoice.

---

### B2G invoice — Italian municipality

| Field | Value |
|---|---|
| Company name | Comune di Firenze |
| Street address | Piazza della Signoria 1 |
| Postal code | 50122 |
| City | Firenze |
| Country | Italy |
| Tax ID / VAT number | IT01307110484 |
| Codice destinatario | UFE0V1 |
| E-Invoicing version | FatturaPA v1.2 |

The codice IPA for each municipality is in the [IPA directory](https://indicepa.gov.it).

---

### B2C invoice — private individual

For invoices to private individuals, use the **codice fiscale** (fiscal code) instead of a Partita IVA. The codice fiscale is 16 alphanumeric characters.

| Field | Value |
|---|---|
| First / Last name | Mario Rossi |
| Street address | Via Garibaldi 5 |
| Postal code | 50123 |
| City | Firenze |
| Country | Italy |
| Codice fiscale | RSSMRA80A01H501Z |
| Codice destinatario | 0000000 |
| E-Invoicing version | FatturaPA v1.2 |

SdI delivers the invoice to the individual's personal fiscal area on the Revenue Agency website.

---

## Related pages

- [CII](/en/1.7/e-invoicing/cii) — for comparison: the international CII-based formats
- [Setup guide](/en/1.7/e-invoicing/setup)
