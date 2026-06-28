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

## Related pages

- [UBL](/en/1.7/e-invoicing/ubl) — the XML format that Peppol carries
- [Belgium country guide](/en/1.7/e-invoicing/country-belgium)
- [Sweden country guide](/en/1.7/e-invoicing/country-sweden)
- [Czech Republic country guide](/en/1.7/e-invoicing/country-czech-republic)
- [Setup guide](/en/1.7/e-invoicing/setup)
