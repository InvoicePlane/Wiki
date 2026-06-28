# E-Invoicing in Italy

## Legal context

| Invoice type | Mandate | Standard |
|---|---|---|
| B2B domestic | Mandatory since 1 January 2019 | FatturaPA via SdI |
| B2G | Mandatory since 2015 | FatturaPA via SdI |
| B2C | Mandatory since 2019 | FatturaPA via SdI |
| Cross-border (non-Italian buyer) | Not mandatory | Optional (conventional invoice) |

Italy has the most comprehensive e-invoicing mandate in Europe. **All** domestic invoices — B2B, B2G, and B2C — must be issued as FatturaPA XML and routed through the SdI hub. An invoice that did not pass through SdI has no legal standing for Italian VAT purposes.

---

## Which format to use

### FatturaPA — all domestic Italian invoices

[FatturaPA](/en/1.7/e-invoicing/fatturaPA) is the only accepted format for domestic Italian invoices. It is a proprietary XML schema defined by the Italian Revenue Agency (Agenzia delle Entrate). It is not based on UBL or CII.

**Template in InvoicePlane:** `FatturaPAv12` — download from the [e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

All invoices go through **SdI** (Sistema di Interscambio). You cannot send a FatturaPA invoice directly to a client — it must pass through SdI first.

---

## VAT number format

Italian VAT numbers (**Partita IVA**) begin with `IT` followed by 11 digits.

| Entity type | Format | Example |
|---|---|---|
| Company (Partita IVA) | `IT` + 11 digits | `IT12345678901` |
| Individual (Codice fiscale) | 16 alphanumeric characters | `RSSMRA80A01H501Z` |

For B2B invoices, use the Partita IVA. For B2C invoices to private individuals, use the codice fiscale (no `IT` prefix — it is a 16-character tax code).

Enter the Partita IVA including `IT` in the **Tax ID / VAT number** field on the client record.

---

## Routing the invoice through SdI

Before you can send an invoice, you need the client's SdI routing address. Ask your client before generating the first invoice. There are two options:

### Codice destinatario

A 7-character alphanumeric code assigned to the client's SdI inbox. Example: `ABC1234`.

Most companies that regularly receive e-invoices have a codice destinatario. It is often printed on purchase orders.

### PEC (certified email)

A certified email address. If the client does not have a codice destinatario, they give you their PEC address instead. Example: `fatture@pec.azienda.it`.

If neither is known, enter `0000000` (seven zeros) as the codice destinatario — the client will receive a notification from SdI to retrieve the invoice from their SdI web portal.

---

## Example client records

### Standard B2B invoice to an Italian company

| Field | Value |
|---|---|
| Company name | Bianchi S.r.l. |
| Street address | Via Roma 10 |
| Postal code | 00100 |
| City | Roma |
| Country | Italy |
| Tax ID / VAT number | IT12345678901 |
| Codice destinatario | XJ5ETH7 |
| E-Invoicing active | Yes |
| E-Invoicing version | FatturaPA v1.2 |

**Delivery:** Via SdI — submit through your intermediary's portal or the Fatture e Corrispettivi web portal.

---

### B2B invoice using PEC routing

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
| E-Invoicing active | Yes |
| E-Invoicing version | FatturaPA v1.2 |

**Note:** When codice destinatario is `0000000`, SdI uses the PEC address for routing. Both fields must be filled in — SdI ignores the PEC if the codice destinatario is not `0000000`.

---

### B2G invoice to an Italian government body

| Field | Value |
|---|---|
| Company name | Ministero dell'Economia e delle Finanze |
| Street address | Via XX Settembre 97 |
| Postal code | 00187 |
| City | Roma |
| Country | Italy |
| Tax ID / VAT number | IT97735020584 |
| Codice destinatario | UFUHP5 |
| Codice IPA | MEF |
| E-Invoicing active | Yes |
| E-Invoicing version | FatturaPA v1.2 |

Government entities have a **codice IPA** (Indice delle Pubbliche Amministrazioni) — a code from the IPA directory that maps to their SdI inbox. Government purchase orders always include the codice IPA.

---

### B2C invoice to a private individual

| Field | Value |
|---|---|
| Company name | (leave blank) |
| First name / Last name | Mario Rossi |
| Street address | Via Garibaldi 5 |
| Postal code | 50123 |
| City | Firenze |
| Country | Italy |
| Codice fiscale | RSSMRA80A01H501Z |
| Codice destinatario | 0000000 |
| E-Invoicing active | Yes |
| E-Invoicing version | FatturaPA v1.2 |

For B2C invoices, the FatturaPA XML uses the individual's codice fiscale instead of a Partita IVA. SdI delivers the invoice to the individual's personal tax area on the Revenue Agency portal.

---

## Submission options

### Via a certified intermediary (recommended)

An intermediary (intermediario accreditato) submits invoices to SdI on your behalf, handles delivery confirmations, and archives invoices for the required 10 years. Most Italian accounting software providers and many European SaaS platforms offer this service.

This is the most practical option for non-Italian companies invoicing Italian clients.

### Via the Fatture e Corrispettivi portal (direct)

The Italian Revenue Agency provides a web portal at [ivaservizi.agenziaentrate.gov.it](https://ivaservizi.agenziaentrate.gov.it) where you can manually upload FatturaPA XML files. This requires a qualified Italian digital certificate (SPID, CIE, or CNS) for authentication.

---

## Timeline after submission

| Event | Timing |
|---|---|
| SdI validates the invoice | Within a few seconds to a few minutes |
| SdI delivers to recipient | Immediately after validation |
| Acceptance / rejection notification | Within 5 business days |
| Invoice becomes final | When SdI issues acceptance receipt |

A rejected invoice must be corrected and resubmitted as a new invoice. SdI does not allow amendments to submitted invoices — corrections must be issued as a credit note (`TD04`) followed by a new invoice.

---

## Checklist before sending

- [ ] FatturaPA template installed from e-invoices repository
- [ ] Client's Partita IVA filled in (starts with `IT`)
- [ ] Codice destinatario or PEC address obtained from client
- [ ] SdI intermediary contracted (or Fatture e Corrispettivi access configured)
- [ ] E-invoicing enabled on client record and FatturaPA selected

---

## Related pages

- [FatturaPA](/en/1.7/e-invoicing/fatturaPA) — format details, SdI flow, XML structure
- [Setup guide](/en/1.7/e-invoicing/setup)
