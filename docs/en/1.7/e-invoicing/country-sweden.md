# E-Invoicing in Sweden

## Legal context

| Invoice type | Mandate | Standard |
|---|---|---|
| B2G central government | Mandatory since 2008 | Peppol BIS Billing 3.0 (via Peppol) |
| B2G regional / municipal | Mandatory since 2019 | Peppol BIS Billing 3.0 |
| B2B private sector | Not currently mandatory | Peppol BIS Billing 3.0 widely adopted |

Sweden was one of the first countries to mandate e-invoicing and was a driving force behind the creation of the Peppol network. All invoices to Swedish public authorities must be submitted as structured e-invoices via Peppol.

---

## Which format to use

### Peppol BIS Billing 3.0

Sweden uses [Peppol BIS Billing 3.0](/en/1.7/e-invoicing/peppol) (UBL 2.1, EN 16931 compliant) for all e-invoicing. Invoices are delivered via certified Peppol access points.

**Template in InvoicePlane:** `PeppolBISv3` — download from the [e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

Sweden also specifies a national CIUS called **CIUS-SE**, which adds some Swedish-specific rules on top of Peppol BIS Billing 3.0. For most invoices the base Peppol BIS Billing 3.0 template is sufficient; your access point will flag any CIUS-SE deviations if they occur.

---

## VAT number format

Swedish VAT numbers (**momsregistreringsnummer**) begin with `SE` followed by 12 digits. The last two digits are always `01` for individual companies.

| Format | Example |
|---|---|
| `SE` + 12 digits | `SE123456789001` |

Enter the full value including `SE` in the **Tax ID / VAT number** field on the client record.

Swedish companies also have an **organisationsnummer** — 10 digits, often written with a hyphen (e.g. `556123-4567`). The VAT number is derived from it: remove the hyphen and append `01`.

---

## Peppol participant IDs in Sweden

Swedish companies and government bodies use **GLN** (Global Location Number) as their Peppol participant ID. GLN is a 13-digit EAN/barcode identifier.

Format: `0088:{13-digit GLN}`  
Example: `0088:7331115101009`

Some Swedish organisations also register VAT-based IDs in addition to GLN. When looking up a Swedish recipient in the [Peppol directory](https://directory.peppol.eu/), search by their organisation number or name. Many Swedish public authorities publish their Peppol IDs on their supplier portals.

---

## Example client records

### Peppol BIS Billing 3.0 — Swedish private company

| Field | Value |
|---|---|
| Company name | Andersson AB |
| Street address | Kungsgatan 1 |
| Postal code | 111 43 |
| City | Stockholm |
| Country | Sweden |
| Tax ID / VAT number | SE123456789001 |
| E-Invoicing active | Yes |
| E-Invoicing version | Peppol BIS Billing 3.0 |

**Peppol participant ID:** `0088:7331115101009` (look up the client's GLN in the Peppol directory).

**Delivery:** Via Peppol access point. If the client is not yet registered in the Peppol directory, send a conventional invoice and ask when they expect to join.

---

### Peppol BIS Billing 3.0 — Swedish central government

| Field | Value |
|---|---|
| Company name | Skatteverket (Swedish Tax Agency) |
| Street address | Solna Strandväg 22 |
| Postal code | 171 94 |
| City | Solna |
| Country | Sweden |
| Tax ID / VAT number | SE202100517901 |
| E-Invoicing active | Yes |
| E-Invoicing version | Peppol BIS Billing 3.0 |

**Peppol participant ID:** Look up Skatteverket in the [Peppol directory](https://directory.peppol.eu/) or on their supplier portal.

**Delivery:** Via Peppol access point. Swedish government entities are all registered in the Peppol directory.

---

### Peppol BIS Billing 3.0 — Swedish municipality

| Field | Value |
|---|---|
| Company name | Göteborgs Stad |
| Street address | Stadskansliet, Rådhuset |
| Postal code | 404 82 |
| City | Göteborg |
| Country | Sweden |
| Tax ID / VAT number | SE212000115001 |
| E-Invoicing active | Yes |
| E-Invoicing version | Peppol BIS Billing 3.0 |

Swedish municipalities handle purchasing differently — some centralise invoicing through a shared service (e.g. ITSV), which means a single Peppol participant ID handles all departments. Ask the municipality's procurement office for the correct Peppol ID.

---

## Historical context: SFTI/SVEFAKTURA

Before Peppol, Sweden used its own e-invoice format called **SVEFAKTURA** (Single Face to Industry) based on an earlier standard. This format is now obsolete — all Swedish e-invoicing has migrated to Peppol BIS Billing 3.0. If you encounter references to SVEFAKTURA, they refer to the pre-Peppol era.

---

## Checklist before sending

- [ ] Peppol template installed from e-invoices repository
- [ ] Peppol access point provider contracted and configured
- [ ] Your own Peppol participant ID registered
- [ ] Client's Swedish VAT number filled in (starts with `SE`, ends with `01`)
- [ ] Client's GLN (Peppol participant ID) obtained from Peppol directory or supplier portal
- [ ] E-invoicing enabled on client record and Peppol BIS Billing 3.0 selected

---

## Related pages

- [Peppol](/en/1.7/e-invoicing/peppol) — the four-corner model, access points, participant IDs, CIUS
- [UBL](/en/1.7/e-invoicing/ubl) — the XML syntax Peppol carries
- [Setup guide](/en/1.7/e-invoicing/setup)
