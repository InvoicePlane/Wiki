# E-Invoicing in Czech Republic

## Legal context

| Invoice type | Mandate | Standard |
|---|---|---|
| B2B domestic | Not currently mandatory | ISDOC recommended |
| B2G central government | Mandatory (NIPEZ portal) | ISDOC or Peppol BIS Billing 3.0 |
| B2B cross-border (EU) | Not mandatory | Peppol BIS Billing 3.0 recommended |

There is no general mandatory e-invoicing requirement for private B2B invoices in the Czech Republic as of 2026. However, most large Czech companies and government entities accept and prefer structured e-invoices.

---

## Which format to use

### ISDOC — for domestic B2B invoices

Use [ISDOC](/en/1.7/e-invoicing/isdoc) when invoicing Czech companies for domestic business. ISDOC is natively supported by Czech accounting software (POHODA, Money S3, Helios, Abra), which means your client can import the invoice directly.

**Template in InvoicePlane:** `ISDOCv6` — download from the [e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

### Peppol BIS Billing 3.0 — for B2G invoices

Use [Peppol BIS Billing 3.0](/en/1.7/e-invoicing/peppol) (UBL 2.1) when invoicing the Czech central government or any public authority via NIPEZ (Národní infrastruktura pro elektronické zadávání veřejných zakázek).

**Template in InvoicePlane:** `PeppolBISv3` — download from the e-invoices repository.

After generating the XML, submit it through a Peppol access point connected to NIPEZ.

---

## VAT number format

Czech VAT numbers (**DIČ** — Daňové identifikační číslo) begin with `CZ` followed by 8, 9, or 10 digits.

| Entity type | Format | Example |
|---|---|---|
| Legal entity | `CZ` + 8 digits | `CZ12345678` |
| Legal entity (extended) | `CZ` + 9–10 digits | `CZ123456789` |
| Individual / sole trader | `CZ` + birth number (10 digits) | `CZ6512311234` |

Enter the full value including `CZ` in the **Tax ID / VAT number** field on the client record.

Czech companies also have an **IČO** (Identifikační číslo osoby) — an 8-digit company registration number without the `CZ` prefix. Some ISDOC templates include this as a separate field.

---

## Data box (datová schránka)

Most Czech companies and all public authorities have a **datová schránka** (data box) — a government-mandated secure messaging system operated by Czech Post. Many Czech businesses send ISDOC invoices via data box rather than by email, particularly for B2G.

To send via data box, you need a data box account yourself. If your client prefers this delivery method, ask them for their data box ID (a 7-character alphanumeric code, e.g. `abc1234`).

---

## Example client records

### ISDOC — Czech B2B domestic invoice

| Field | Value |
|---|---|
| Company name | Novák s.r.o. |
| Street address | Václavské náměstí 1 |
| Postal code | 110 00 |
| City | Praha 1 |
| Country | Czech Republic |
| Tax ID / VAT number | CZ12345678 |
| E-Invoicing active | Yes |
| E-Invoicing version | ISDOC v6.0.1 |

**Delivery:** Email the `.isdoc` XML file, or send via the client's datová schránka.

---

### Peppol BIS Billing 3.0 — Czech B2G invoice

| Field | Value |
|---|---|
| Company name | Ministerstvo financí |
| Street address | Letenská 15 |
| Postal code | 118 10 |
| City | Praha 1 |
| Country | Czech Republic |
| Tax ID / VAT number | CZ00006947 |
| E-Invoicing active | Yes |
| E-Invoicing version | Peppol BIS Billing 3.0 |

**Delivery:** Via Peppol access point to NIPEZ. The recipient's Peppol participant ID for Czech authorities uses the national ID format: `0106:{IČO}` (e.g. `0106:00006947`).

---

## Checklist before sending

- [ ] ISDOC template installed (for B2B)
- [ ] Peppol template installed and access point configured (for B2G)
- [ ] Client's DIČ (VAT number) filled in — starts with `CZ`
- [ ] Client's IČO filled in (if the ISDOC template requires it)
- [ ] E-invoicing enabled on the client record and correct format selected
- [ ] Delivery method agreed with client (email / data box / Peppol)

---

## Related pages

- [ISDOC](/en/1.7/e-invoicing/isdoc) — Czech national format in detail
- [Peppol](/en/1.7/e-invoicing/peppol) — access points and participant IDs
- [UBL](/en/1.7/e-invoicing/ubl) — the underlying syntax for Peppol and ISDOC
- [Setup guide](/en/1.7/e-invoicing/setup)
