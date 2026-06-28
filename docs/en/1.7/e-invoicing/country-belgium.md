# E-Invoicing in Belgium

## Legal context

| Invoice type | Mandate | Standard |
|---|---|---|
| B2G | Mandatory since 2019 | Peppol BIS Billing 3.0 |
| B2B | Mandatory since 1 January 2026 | Peppol BIS Billing 3.0 |
| B2C | Not mandatory | — |

Belgium has one of the most advanced e-invoicing mandates in Europe. All invoices between VAT-registered Belgian businesses must be issued and received as structured e-invoices via the Peppol network from 1 January 2026.

---

## Which format to use

### Peppol BIS Billing 3.0

Belgium uses [Peppol BIS Billing 3.0](/en/1.7/e-invoicing/peppol) (UBL 2.1, EN 16931 compliant) for all mandatory e-invoicing. Invoices are delivered via certified Peppol access points.

**Template in InvoicePlane:** `PeppolBISv3` — download from the [e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

Belgium also specifies a national CIUS called **CIUS-BE**. For most invoices, the base Peppol BIS Billing 3.0 template without a CIUS is accepted. Your access point provider will flag any CIUS-BE deviations if they occur.

---

## What you need before sending

### Your Peppol participant ID

To send and receive Peppol invoices in Belgium, you need to be registered in the Peppol directory. Contact a Belgian Peppol access point provider to register. Belgian participant IDs are typically VAT-based:

Format: `9925:BE{VAT without BE prefix}`  
Example: `9925:0123456789` (for VAT `BE0123456789`)

### Your client's Peppol participant ID

To send an invoice, you need the recipient's Peppol participant ID. The client's VAT-based ID follows the same pattern. You can also look them up in the [Peppol directory](https://directory.peppol.eu/).

If your client is not yet registered in the Peppol directory, the invoice cannot be delivered via Peppol — you would need to send it another way until they register.

---

## VAT number format

Belgian VAT numbers begin with `BE` followed by 10 digits. The first digit is always `0`.

| Format | Example |
|---|---|
| `BE` + 10 digits | `BE0123456789` |

Enter the full value including `BE` in the **Tax ID / VAT number** field on the client record.

Belgian companies also have a **KBO/BCE number** (Kruispuntbank van Ondernemingen / Banque-Carrefour des Entreprises), which is the same 10 digits without the `BE` prefix. It is identical to the VAT number digits and can be used for the Peppol participant ID.

---

## Example client records

### Belgian B2B invoice via Peppol

| Field | Value |
|---|---|
| Company name | ACME Belgium NV |
| Street address | Wetstraat 16 |
| Postal code | 1000 |
| City | Brussel / Bruxelles |
| Country | Belgium |
| Tax ID / VAT number | BE0123456789 |
| E-Invoicing active | Yes |
| E-Invoicing version | Peppol BIS Billing 3.0 |

**Delivery:** Via Peppol access point. Recipient's participant ID: `9925:0123456789`.

---

### Belgian government (B2G) via Peppol

| Field | Value |
|---|---|
| Company name | FOD Financiën |
| Street address | Wetstraat 24 |
| Postal code | 1000 |
| City | Brussel |
| Country | Belgium |
| Tax ID / VAT number | BE0308357159 |
| E-Invoicing active | Yes |
| E-Invoicing version | Peppol BIS Billing 3.0 |

Government entities are in the Peppol directory. Look up their participant ID on the [Peppol directory](https://directory.peppol.eu/) before sending.

---

## Checklist before sending

- [ ] Peppol template installed
- [ ] Peppol access point provider contracted and configured
- [ ] Your own Peppol participant ID registered
- [ ] Client's Belgian VAT number filled in (starts with `BE`)
- [ ] Client's Peppol participant ID obtained (check the Peppol directory)
- [ ] E-invoicing enabled on the client record and Peppol BIS Billing 3.0 selected

---

## Related pages

- [Peppol](/en/1.7/e-invoicing/peppol) — the four-corner model, access points, participant IDs
- [UBL](/en/1.7/e-invoicing/ubl) — the XML syntax used by Peppol
- [Setup guide](/en/1.7/e-invoicing/setup)
