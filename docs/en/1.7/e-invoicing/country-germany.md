# E-Invoicing in Germany

## Legal context

| Invoice type | Mandate | Standard |
|---|---|---|
| B2B domestic | Mandatory from 1 January 2025 | ZUGFeRD 2.x (EN16931) or XRechnung |
| B2G federal | Mandatory since 2020 | XRechnung via OZG-RE |
| B2G state/municipal | Mandatory (varies by state) | XRechnung (most states) or ZUGFeRD |
| B2C | Not mandatory | — |

Germany's B2B e-invoicing mandate (§ 14 UStG) requires that all domestic invoices between German VAT-registered businesses be in a structured e-invoice format. The accepted formats are ZUGFeRD 2.x at the EN16931 profile and XRechnung. Conventional PDFs without embedded XML no longer satisfy the legal requirement for domestic B2B invoices.

---

## Which format to use

### ZUGFeRD 2.1 — B2B domestic invoices

[ZUGFeRD](/en/1.7/e-invoicing/factur-x) is the recommended format for B2B invoices to German businesses. It produces a **PDF/A-3 file with the CII XML embedded inside** — the recipient receives one file that their accounting software can process automatically.

**Built-in template in InvoicePlane.** Select **ZUGFeRD 2.1 EN16931** from the E-Invoicing version dropdown on the client record. No additional installation needed.

The embedded XML filename is `ZUGFeRD-invoice.xml`.

### XRechnung — B2G invoices

[XRechnung](/en/1.7/e-invoicing/cii) is the mandatory format for invoices to German federal and state government bodies. It is a **standalone CII XML file** — there is no PDF embedding. XRechnung has stricter field requirements than ZUGFeRD EN16931.

**Template in InvoicePlane:** `XRechnungv30` — download from the [e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

Submit via the [OZG-RE portal](https://www.ozg-re.de) (central government) or the relevant state portal.

### Peppol (optional, cross-border)

Germany is connected to the Peppol network but Peppol is not commonly used domestically. For invoices to German companies from foreign suppliers, Peppol BIS Billing 3.0 is an alternative if both parties are registered. For domestic German invoices, prefer ZUGFeRD.

---

## VAT number format

German VAT numbers (**Umsatzsteuer-Identifikationsnummer, USt-IdNr.**) begin with `DE` followed by 9 digits.

| Format | Example |
|---|---|
| `DE` + 9 digits | `DE123456789` |

German companies also have a local **Steuernummer** (tax number) in the format `12/345/67890` or `123/456/78901` — format varies by state. The **USt-IdNr.** (starting with `DE`) is used for the VAT number field in e-invoices. The Steuernummer is used domestically on paper invoices.

Enter the USt-IdNr. (with `DE` prefix) in the **Tax ID / VAT number** field on the client record.

---

## Example client records

### ZUGFeRD — German B2B invoice (built-in template)

| Field | Value |
|---|---|
| Company name | Muster GmbH |
| Street address | Unter den Linden 1 |
| Postal code | 10117 |
| City | Berlin |
| Country | Germany |
| Tax ID / VAT number | DE123456789 |
| E-Invoicing active | Yes |
| E-Invoicing version | ZUGFeRD 2.1 EN16931 |

**Delivery:** Send the PDF to the client. The XML is inside it. Most German ERP systems (SAP, Lexware, DATEV, Sage, Sevdesk) can extract and import it automatically.

---

### XRechnung — German federal government (B2G)

| Field | Value |
|---|---|
| Company name | Bundesministerium der Finanzen |
| Street address | Wilhelmstraße 97 |
| Postal code | 10117 |
| City | Berlin |
| Country | Germany |
| Tax ID / VAT number | DE122256884 |
| Leitweg-ID | 991-00001-06 |
| E-Invoicing active | Yes |
| E-Invoicing version | XRechnung 3.0 |

**Leitweg-ID:** This is a routing identifier required for XRechnung submissions. It is provided by the government entity in their purchase order or on their invoice requirements page. Format: `{RouteCode}-{SubRoute}-{CheckDigit}`.

**Delivery:** Upload the XML file to the OZG-RE portal (or the state portal listed in the purchase order).

---

### ZUGFeRD — German state government (B2G, where accepted)

Some German states and municipalities accept ZUGFeRD instead of XRechnung. Confirm with the contracting authority which format they require.

| Field | Value |
|---|---|
| Company name | Bayerisches Staatsministerium für Finanzen |
| Street address | Odeonsplatz 4 |
| Postal code | 80539 |
| City | München |
| Country | Germany |
| Tax ID / VAT number | DE811335839 |
| E-Invoicing active | Yes |
| E-Invoicing version | ZUGFeRD 2.1 EN16931 |

---

## ZUGFeRD profile selection

InvoicePlane's built-in ZUGFeRD template uses the **EN16931 profile**, which is the correct choice for most business invoices. The other profiles (MINIMUM, BASIC WL, BASIC, EXTENDED) are described on the [Factur-X and ZUGFeRD page](/en/1.7/e-invoicing/factur-x#profiles).

If a customer specifically requests the EXTENDED profile, you would need to [create a custom template](/en/1.7/e-invoicing/custom-templates).

---

## Checklist before sending

- [ ] ZUGFeRD: no extra installation needed — built-in template available
- [ ] XRechnung: template installed from e-invoices repository
- [ ] Client's German USt-IdNr. filled in (starts with `DE`)
- [ ] For XRechnung: Leitweg-ID obtained from the government entity
- [ ] E-invoicing enabled on client record and correct format selected
- [ ] For XRechnung: OZG-RE account created if submitting directly

---

## Validation

- **ZUGFeRD / Factur-X:** [Mustang Project Validator](https://www.mustangproject.org/validator/)
- **XRechnung:** [KoSIT Validator](https://projekte.kosit.org/kosit/validator) — the official German XRechnung validator

---

## Related pages

- [ZUGFeRD and Factur-X](/en/1.7/e-invoicing/factur-x) — profiles, PDF embedding, validation
- [CII](/en/1.7/e-invoicing/cii) — the XML syntax behind ZUGFeRD and XRechnung
- [Peppol](/en/1.7/e-invoicing/peppol) — cross-border alternative
- [Setup guide](/en/1.7/e-invoicing/setup)
