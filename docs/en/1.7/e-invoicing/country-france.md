# E-Invoicing in France

## Legal context

| Invoice type | Mandate | Standard |
|---|---|---|
| B2G | Mandatory since 2017 | Factur-X or UBL via Chorus Pro |
| B2B domestic (large companies, >5,000 staff) | From 1 September 2026 | Factur-X or UBL via PPF/PDP |
| B2B domestic (mid-size, 250–5,000 staff) | From 1 September 2027 | Factur-X or UBL via PPF/PDP |
| B2B domestic (small companies, <250 staff) | From 1 September 2028 | Factur-X or UBL via PPF/PDP |

France is introducing mandatory B2B e-invoicing in stages from 2026 through 2028. The government portal is **Chorus Pro** for B2G, and a new **PPF** (Portail Public de Facturation) / **PDP** (Plateforme de Dématérialisation Partenaire) system for B2B.

---

## Which format to use

### Factur-X — B2B invoices

[Factur-X](/en/1.7/e-invoicing/factur-x) is France's preferred format for B2B invoices. It produces a **PDF/A-3 file with CII XML embedded inside**. The recipient receives one human-readable, machine-processable file.

**Built-in template in InvoicePlane.** Select **Factur-X EN16931** from the E-Invoicing version dropdown. No additional installation needed.

The embedded XML filename is `factur-x.xml`.

Factur-X is also accepted by Chorus Pro for B2G submissions.

### UBL (alternative for B2B)

France also accepts UBL 2.1 (Peppol BIS Billing 3.0) for e-invoicing via certified PDP platforms. If your French client's platform requires UBL rather than CII, use the Peppol template.

**Template in InvoicePlane:** `PeppolBISv3` — download from the [e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

---

## Factur-X profiles

The built-in InvoicePlane template uses the **EN16931 profile**, which is compliant with the mandatory French requirements. The available profiles and when to use them are described on the [Factur-X and ZUGFeRD page](/en/1.7/e-invoicing/factur-x#profiles).

For most business invoices, EN16931 is correct. The MINIMUM profile is not sufficient for invoices that need to be processed — it lacks line-item detail.

---

## VAT number format

French VAT numbers (**Numéro TVA intracommunautaire**) begin with `FR` followed by 2 alphanumeric characters and 9 digits.

| Format | Example |
|---|---|
| `FR` + 2 characters + 9 digits | `FR12345678901` |
| `FR` + letter + letter + 9 digits | `FRAX345678901` |

The 2-character code can be digits or letters (but not I or O). The 9 digits are the company's SIREN number.

Enter the full value including `FR` in the **Tax ID / VAT number** field on the client record.

### SIREN and SIRET

French companies have a **SIREN** (9-digit company identifier) and **SIRET** (14-digit establishment identifier = SIREN + 5-digit NIC code). Some Factur-X implementations include the SIRET as an additional identifier. The VAT number field uses the TVA number; SIRET is a separate optional field.

---

## Example client records

### Factur-X — French B2B invoice (built-in template)

| Field | Value |
|---|---|
| Company name | Dupont SARL |
| Street address | 10 Rue de Rivoli |
| Postal code | 75001 |
| City | Paris |
| Country | France |
| Tax ID / VAT number | FR12345678901 |
| E-Invoicing active | Yes |
| E-Invoicing version | Factur-X EN16931 |

**Delivery:** Send the PDF to the client by email or via your PDP platform. The embedded XML allows their accounting software to process it automatically.

---

### Factur-X — French B2G via Chorus Pro

| Field | Value |
|---|---|
| Company name | Direction Générale des Finances Publiques |
| Street address | 139 Rue de Bercy |
| Postal code | 75572 |
| City | Paris Cedex 12 |
| Country | France |
| Tax ID / VAT number | FR83000017594 |
| SIRET | 11000001700013 |
| Service code | Your order's SIRET/service code |
| E-Invoicing active | Yes |
| E-Invoicing version | Factur-X EN16931 |

**Delivery:** Log in to [chorus-pro.gouv.fr](https://chorus-pro.gouv.fr) with your French digital certificate and upload the Factur-X PDF. Chorus Pro validates the XML, routes it to the correct government department, and sends you a receipt.

**Engagement number:** B2G invoices to French government bodies require an **engagement number** (numéro d'engagement) issued by the government entity with the purchase order. Include this in the invoice reference fields before generating.

---

### Peppol BIS Billing 3.0 — via PDP platform (B2B alternative)

| Field | Value |
|---|---|
| Company name | Renard Industries SAS |
| Street address | 5 Avenue des Champs-Élysées |
| Postal code | 75008 |
| City | Paris |
| Country | France |
| Tax ID / VAT number | FRAX123456789 |
| E-Invoicing active | Yes |
| E-Invoicing version | Peppol BIS Billing 3.0 |

**Delivery:** Submit via your PDP (Plateforme de Dématérialisation Partenaire) platform. PDPs are certified operators similar to Peppol access points.

---

## Chorus Pro for B2G

Chorus Pro is the French government's e-invoice receiving portal. It accepts Factur-X (recommended), UBL 2.1, and CII standalone.

To use Chorus Pro:
1. Register at [chorus-pro.gouv.fr](https://chorus-pro.gouv.fr) with your SIRET and a digital certificate
2. Get the destination SIRET and service code from the government entity's purchase order
3. Upload the Factur-X PDF
4. Chorus Pro validates and routes the invoice
5. You receive a reception confirmation code

---

## Checklist before sending

- [ ] Factur-X: no extra installation needed — built-in template available
- [ ] Peppol UBL: template installed from e-invoices repository (if using PDP)
- [ ] Client's French TVA number filled in (starts with `FR`)
- [ ] For B2G: Chorus Pro account registered and service code obtained from the government entity
- [ ] E-invoicing enabled on client record and Factur-X EN16931 selected

---

## Validation

- **Factur-X:** FNFE-MPE provides an [online validator](https://www.fnfe-mpe.org)
- **Chorus Pro built-in validator:** validation happens on upload
- **Mustang Project:** validates both Factur-X and ZUGFeRD

---

## Related pages

- [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) — profiles, PDF embedding, validation
- [CII](/en/1.7/e-invoicing/cii) — the XML syntax behind Factur-X
- [Peppol](/en/1.7/e-invoicing/peppol) — for PDP-based UBL submissions
- [Setup guide](/en/1.7/e-invoicing/setup)
