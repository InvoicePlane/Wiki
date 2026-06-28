# E-Invoicing in Spain

## Legal context

| Invoice type | Mandate | Standard |
|---|---|---|
| B2G | Mandatory since 2015 | Facturae via FACe or regional portals |
| B2B domestic (large companies, >8M€) | From 2025 | Facturae / Verifactu |
| B2B domestic (small companies) | From 2026 | Facturae / Verifactu |
| B2C | SII reporting required (for large companies) | (indirect obligation) |
| Cross-border | Not mandatory | Peppol BIS Billing 3.0 recommended |

Spain's B2B e-invoicing mandate (Ley Crea y Crece) is being phased in from 2025. The format is **Facturae** for all mandatory invoices. Facturae files must be digitally signed before submission.

---

## Which format to use

### Facturae — B2G and domestic B2B invoices

[Facturae](/en/1.7/e-invoicing/facturae) is Spain's national e-invoice format and the only accepted format for government invoices and the domestic B2B mandate. It uses its own XML schema and must be **digitally signed** with a qualified certificate before submission.

**Template in InvoicePlane:** `FacturaeV321` — download from the [e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

InvoicePlane generates the **unsigned** XML. You must sign it using **AutoFirma** or a similar tool before uploading.

### Peppol BIS Billing 3.0 — cross-border invoices

For invoices to non-Spanish clients, [Peppol BIS Billing 3.0](/en/1.7/e-invoicing/peppol) (UBL 2.1) is the appropriate format for cross-border Peppol network delivery. It does not require a digital signature.

**Template in InvoicePlane:** `PeppolBISv3` — download from the e-invoices repository.

---

## Digital signature

Facturae files use **XAdES-EPES** (XML Advanced Electronic Signature with Explicit Policy) applied to the whole XML document. You need a qualified digital certificate issued by a recognised Spanish authority (FNMT, ACCV, Camerfirma, etc.).

**Free signing tool:** [AutoFirma](https://firmaelectronica.gob.es/Home/Descargas.html) — provided by the Spanish government.

**Workflow:**
1. Generate the unsigned Facturae XML in InvoicePlane
2. Open AutoFirma and load the XML file
3. Sign with your certificate — AutoFirma produces a `.xsig` file
4. Upload the `.xsig` file to FACe or send to the B2B recipient

---

## VAT number format

Spanish VAT numbers (**NIF/CIF**) begin with `ES` followed by 9 characters.

| Entity type | Format | Example |
|---|---|---|
| Legal entity (CIF) | `ES` + letter + 7 digits + letter or digit | `ESB12345678` |
| Individual (NIF) | `ES` + 8 digits + letter | `ES12345678Z` |
| Foreign entity (NIE) | `ES` + X/Y/Z + 7 digits + letter | `ESX1234567Z` |

Enter the full value including `ES` in the **Tax ID / VAT number** field on the client record.

---

## DIR3 codes for B2G invoices

When invoicing a Spanish public administration, the invoice must include three **DIR3** codes (Directorio Común de Órganos y Unidades Organizativas) to route it to the correct government department:

| Code | Name | Description |
|---|---|---|
| Órgano gestor | Managing body | The department responsible for the contract |
| Unidad tramitadora | Processing unit | The administrative unit processing the invoice |
| Oficina contable | Accounting office | The finance office making the payment |

These codes are provided by the government entity in the purchase order or on their supplier portal. They are mandatory — FACe will reject invoices without them.

---

## Example client records

### Facturae — Spanish B2G invoice via FACe

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
| E-Invoicing active | Yes |
| E-Invoicing version | Facturae 3.2.1 |

**Delivery:**
1. Generate XML in InvoicePlane
2. Sign with AutoFirma → produces `.xsig` file
3. Upload to [face.gob.es](https://face.gob.es)
4. Note the FACe tracking number for follow-up

---

### Facturae — Spanish B2B invoice

| Field | Value |
|---|---|
| Company name | García Construcciones SL |
| Street address | Calle Mayor 5 |
| Postal code | 28013 |
| City | Madrid |
| Country | Spain |
| Tax ID / VAT number | ESB12345678 |
| E-Invoicing active | Yes |
| E-Invoicing version | Facturae 3.2.1 |

**Delivery:**
1. Generate XML in InvoicePlane
2. Sign with AutoFirma → produces `.xsig` file
3. Send the signed file by email or via a B2B e-invoicing platform

---

### Peppol BIS Billing 3.0 — cross-border invoice from Spain

| Field | Value |
|---|---|
| Company name | Acme France SAS |
| Street address | 15 Rue de la Paix |
| Postal code | 75002 |
| City | Paris |
| Country | France |
| Tax ID / VAT number | FR12345678901 |
| E-Invoicing active | Yes |
| E-Invoicing version | Peppol BIS Billing 3.0 |

**Delivery:** Via Peppol access point using the French client's Peppol participant ID. No digital signature required for Peppol.

---

## Regional portals

Spain has regional e-invoice portals alongside FACe. Some accept Facturae, others have additional format requirements:

| Region | Portal | Notes |
|---|---|---|
| Catalonia | [e.FACT](https://efact.eacat.cat) | Accepts Facturae |
| Basque Country | [AURREKIN](https://www.aurrekin.net) | Facturae; TicketBAI for tax reporting |
| Valencia | [OVACEN](https://ovacen.gva.es) | Accepts Facturae |
| Madrid | [Madrid.org invoices](https://sede.madrid.org) | Accepts Facturae via FACe |

In most cases, submitting to FACe also notifies regional portals for government entities that are registered on FACe.

---

## Checklist before sending

- [ ] Facturae template installed from e-invoices repository
- [ ] Qualified digital certificate obtained from FNMT or another recognised authority
- [ ] AutoFirma installed (for signing)
- [ ] Client's Spanish NIF/CIF filled in (starts with `ES`)
- [ ] For B2G: DIR3 codes (Órgano gestor, Unidad tramitadora, Oficina contable) obtained from client
- [ ] FACe account created if submitting directly
- [ ] E-invoicing enabled on client record and Facturae 3.2.1 selected

---

## Related pages

- [Facturae](/en/1.7/e-invoicing/facturae) — format details, digital signature, FACe portal
- [Peppol](/en/1.7/e-invoicing/peppol) — for cross-border invoices
- [Setup guide](/en/1.7/e-invoicing/setup)
