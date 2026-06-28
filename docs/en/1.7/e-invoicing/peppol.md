# Peppol

## What is Peppol?

**Peppol** (Pan-European Public Procurement On-Line) is a network infrastructure for exchanging e-invoices, orders, and other business documents between companies and governments across Europe and beyond. It is not an XML format — it is a **transport layer** that carries [UBL](/en/1.7/e-invoicing/ubl) or CII XML documents.

Think of Peppol as a secure postal network for business documents: you hand your document to your certified carrier (access point), and it is delivered to the recipient's carrier, who hands it to the recipient.

Peppol is managed by the **OpenPeppol** association and is mandatory for public-sector procurement in many EU member states.

---

## Peppol BIS Billing 3.0 — the invoice format

The invoice format used on the Peppol network is **Peppol BIS Billing 3.0** (BIS = Business Interoperability Specification). It is a constrained profile of [UBL 2.1](/en/1.7/e-invoicing/ubl) that is fully EN 16931 compliant.

The `CustomizationID` in a Peppol BIS Billing 3.0 invoice is:

```
urn:cen.eu:en16931:2017#compliant#urn:fdc:peppol.eu:2017:poacc:billing:3.0
```

**Template in InvoicePlane:** `PeppolBISv3` (or similar) — download from the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices). See [Setup — Step 2](/en/1.7/e-invoicing/setup#step-2--install-additional-xml-templates).

---

## The four-corner model

Peppol uses a **four-corner model** for delivery:

```
Corner 1               Corner 2                  Corner 3               Corner 4
[Sender]  ──────▶  [Sender's AP]  ──────▶  [Receiver's AP]  ──────▶  [Receiver]
(you)               (your access              (their access             (your client)
                     point provider)           point provider)
```

You generate the UBL XML in InvoicePlane (corner 1). Your access point provider (corner 2) validates the document, looks up the receiver's access point in the Peppol directory (SMP), and delivers the document to the receiver's access point (corner 3), which then delivers it to the recipient (corner 4).

You do not contact the receiver's access point directly.

---

## What you need to send via Peppol

### 1. A Peppol access point provider

A Peppol access point (AP) is a certified service provider that connects your system to the Peppol network. You contract with an AP provider in your country and use their platform to submit invoices.

When selecting a provider, check:
- Which countries they support (important if your clients are in multiple countries)
- Whether they offer a web upload interface, an API, or both
- Pricing model (per document, monthly flat fee, etc.)

Lists of certified access point providers are published by each country's Peppol authority. For Czech Republic: search for "Peppol přístupový bod" on the NIPEZ portal. For Belgium: see the Hermes e-procurement portal.

### 2. A Peppol participant ID

A **Peppol participant ID** is a registered identifier that allows other parties on the network to find you. It is registered in the Peppol directory (SML/SMP).

Common formats:

| Format | Example | Used in |
|---|---|---|
| VAT-based | `9925:BE0123456789` | Belgium, Germany, Austria |
| GLN-based | `0088:1234567890123` | Sweden, Denmark, many others |
| IBAN-based | (rare) | Some specific use cases |
| National ID | `0106:CZ12345678` | Czech Republic |

Your access point provider will help you register your participant ID when you sign up.

### 3. Your client's Peppol participant ID

To send an invoice to a client via Peppol, you need **their** participant ID. Ask your client for it directly, or look them up in the [Peppol directory](https://directory.peppol.eu/).

If the client is not registered in the Peppol directory, they cannot receive Peppol invoices — you would need to send the invoice another way (email, postal) or wait until they register.

---

## CIUS — country-specific Peppol profiles

A CIUS (Core Invoice Usage Specification) is a national or sector-specific set of additional rules on top of Peppol BIS Billing 3.0. CIUS documents do not change the XML format — they restrict or extend the allowed values.

| CIUS | Country | Notes |
|---|---|---|
| CIUS-BE | Belgium | Minor additional requirements |
| CIUS-SE | Sweden | Swedish-specific rules |
| CIUS-AT | Austria | Austrian government procurement |
| CIUS-DE | Germany (B2G via Peppol) | Rarely used — XRechnung is more common for Germany B2G |

For most cross-border B2B and B2G invoices, the base Peppol BIS Billing 3.0 template works without a CIUS. Your access point provider will inform you if a specific CIUS is required for a particular recipient.

---

## InvoicePlane's role

InvoicePlane generates the UBL XML document (corners 1 and the handoff to corner 2). The actual delivery over the Peppol network is handled by your access point provider. InvoicePlane does not connect to Peppol directly.

**Typical workflow:**

1. Generate the invoice in InvoicePlane — the UBL XML is produced automatically
2. Download the XML file
3. Upload it to your access point provider's portal (or submit via their API)
4. Your access point delivers it to the recipient
5. You receive a delivery confirmation from your access point

---

## Countries using Peppol

| Country | Mandate | Scope |
|---|---|---|
| Belgium | Since 2019 (B2G); 2026 (B2B) | B2G mandatory; B2B mandatory from 1 Jan 2026 |
| Sweden | Since 2019 | B2G mandatory for central and regional government |
| Norway | Since 2019 | B2G mandatory |
| Denmark | Since 2005 (OIOUBL, migrated to Peppol) | B2G mandatory |
| Netherlands | Since 2020 | B2G mandatory |
| Finland | Since 2020 | B2G mandatory |
| Austria | Since 2014 (ebInterface, migrated to Peppol) | B2G mandatory |
| Czech Republic | B2G via NIPEZ | B2G mandatory for central government |
| Germany | Available | XRechnung preferred for B2G; Peppol optional |
| France | Available | Chorus Pro preferred for B2G; Peppol optional |

---

## Examples

All examples use the same template: **`PeppolBISv3`** (Peppol BIS Billing 3.0, UBL 2.1). The client record fields are the same across countries — only the VAT number format and Peppol participant ID format differ.

### Belgium — B2B invoice (mandatory from 2026)

Belgian VAT numbers start with `BE` followed by 10 digits. Peppol participant IDs use the VAT-based scheme `9925:`.

| Field | Value |
|---|---|
| Company name | ACME Belgium NV |
| Street address | Wetstraat 16 |
| Postal code | 1000 |
| City | Brussel |
| Country | Belgium |
| Tax ID / VAT number | BE0123456789 |
| E-Invoicing version | Peppol BIS Billing 3.0 |

Recipient's Peppol participant ID: `9925:0123456789`

---

### Belgium — B2G invoice (mandatory since 2019)

Same format as B2B. Government entities appear in the [Peppol directory](https://directory.peppol.eu/).

| Field | Value |
|---|---|
| Company name | FOD Financiën |
| Street address | Wetstraat 24 |
| Postal code | 1000 |
| City | Brussel |
| Country | Belgium |
| Tax ID / VAT number | BE0308357159 |
| E-Invoicing version | Peppol BIS Billing 3.0 |

Recipient's Peppol participant ID: look up in the Peppol directory.

---

### Sweden — private company

Swedish VAT numbers start with `SE` followed by 12 digits (last two are always `01`). Participant IDs use GLN (Global Location Number) with scheme `0088:`.

| Field | Value |
|---|---|
| Company name | Andersson AB |
| Street address | Kungsgatan 1 |
| Postal code | 111 43 |
| City | Stockholm |
| Country | Sweden |
| Tax ID / VAT number | SE123456789001 |
| E-Invoicing version | Peppol BIS Billing 3.0 |

Recipient's Peppol participant ID: `0088:{13-digit GLN}` — look up in the [Peppol directory](https://directory.peppol.eu/) or ask the client for their GLN.

---

### Sweden — B2G (mandatory since 2008 for central government)

| Field | Value |
|---|---|
| Company name | Skatteverket |
| Street address | Solna Strandväg 22 |
| Postal code | 171 94 |
| City | Solna |
| Country | Sweden |
| Tax ID / VAT number | SE202100517901 |
| E-Invoicing version | Peppol BIS Billing 3.0 |

Recipient's Peppol participant ID: look up Skatteverket in the Peppol directory. Swedish municipalities sometimes centralise through a shared service — confirm with the contracting entity which ID to use.

---

### Czech Republic — B2G via NIPEZ

Czech VAT numbers (**DIČ**) start with `CZ` followed by 8–10 digits. Czech Peppol participant IDs use the national ID scheme `0106:` with the company's IČO (registration number).

| Field | Value |
|---|---|
| Company name | Ministerstvo financí |
| Street address | Letenská 15 |
| Postal code | 118 10 |
| City | Praha 1 |
| Country | Czech Republic |
| Tax ID / VAT number | CZ00006947 |
| E-Invoicing version | Peppol BIS Billing 3.0 |

Recipient's Peppol participant ID: `0106:00006947` (scheme `0106:` + IČO without leading zeros may vary — look up in the Peppol directory or the NIPEZ portal).

---

### Netherlands — B2G (mandatory since 2020)

Dutch VAT numbers start with `NL` followed by 12 characters (9 digits + `B` + 2 digits). Participant IDs use GLN (`0088:`) or KVK-based schemes.

| Field | Value |
|---|---|
| Company name | Ministerie van Financiën |
| Street address | Korte Voorhout 7 |
| Postal code | 2511 CW |
| City | Den Haag |
| Country | Netherlands |
| Tax ID / VAT number | NL001234567B01 |
| E-Invoicing version | Peppol BIS Billing 3.0 |

Recipient's Peppol participant ID: look up in the Peppol directory. Dutch government entities are registered under GLN or OIN (Organisatie-identificatienummer) scheme `0190:`.

---

### Norway — B2G (mandatory since 2019)

Norwegian VAT numbers start with `NO` followed by 9 digits and the suffix `MVA`. In e-invoicing fields, the suffix is often omitted — use the 9-digit number only. Participant IDs use the organisation number scheme `0192:`.

| Field | Value |
|---|---|
| Company name | Skatteetaten |
| Street address | Postboks 9200 Grønland |
| Postal code | 0134 |
| City | Oslo |
| Country | Norway |
| Tax ID / VAT number | NO974761076 |
| E-Invoicing version | Peppol BIS Billing 3.0 |

Recipient's Peppol participant ID: `0192:974761076`

---

### Finland — B2G (mandatory since 2020)

Finnish VAT numbers start with `FI` followed by 8 digits. Participant IDs use the business ID scheme `0037:`.

| Field | Value |
|---|---|
| Company name | Verohallinto |
| Street address | PL 325 |
| Postal code | 00052 |
| City | Vero |
| Country | Finland |
| Tax ID / VAT number | FI02454022 |
| E-Invoicing version | Peppol BIS Billing 3.0 |

Recipient's Peppol participant ID: `0037:0245402-2` — Finnish business IDs are 7 digits + hyphen + check digit. Confirm the participant ID in the Peppol directory.

---

## Related pages

- [UBL](/en/1.7/e-invoicing/ubl) — the XML format that Peppol carries
- [Setup guide](/en/1.7/e-invoicing/setup)
