# CII — Cross Industry Invoice

## What is CII?

**CII** (Cross Industry Invoice) is an XML format defined by **UN/CEFACT** (United Nations Centre for Trade Facilitation and Electronic Business). It is designed to represent invoices across industry sectors and national boundaries.

The version used in European e-invoicing is **UN/CEFACT CII D16B**, published in 2016. CII is one of two XML syntaxes recognised by the European e-invoicing standard **EN 16931** (the other being [UBL](/en/1.7/e-invoicing/ubl)).

---

## EN 16931 and CII

EN 16931 defines the **semantic data model** for a European invoice — what information it must contain and what it means. It does not prescribe an XML syntax. CII D16B is one of the two authorised syntaxes for expressing an EN 16931 invoice.

All CII-based formats below are EN 16931 compliant at their core (with some adding optional extensions beyond the standard).

---

## Profiles and derivatives

### Factur-X (France)

Factur-X is a French standard that embeds a CII XML file inside a PDF/A-3 document. The recipient receives a single PDF file that is both human-readable and machine-processable. Factur-X is EN 16931 compliant.

The embedded XML filename must be **`factur-x.xml`**.

This is a built-in template in InvoicePlane 1.7. See the dedicated [Factur-X and ZUGFeRD page](/en/1.7/e-invoicing/factur-x) for profiles, how embedding works, and how to select a profile.

### ZUGFeRD 2.x (Germany)

ZUGFeRD (Zentraler User Guide des Forums elektronische Rechnung Deutschland) is technically the same standard as Factur-X. The XML schema and profiles are identical. The only practical differences are:

- The embedded XML filename is **`ZUGFeRD-invoice.xml`** (instead of `factur-x.xml`)
- The branding and some namespace metadata differ slightly

ZUGFeRD is used in Germany for B2B invoices. This is a built-in template in InvoicePlane 1.7.

See [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) for the shared documentation.

### XRechnung (Germany, B2G)

XRechnung is a German national profile of CII EN 16931 for **business-to-government invoices**. Unlike Factur-X and ZUGFeRD, XRechnung is a **standalone CII XML file** — it is not embedded in a PDF. The German federal government and most state governments only accept XRechnung for their procurement portals.

Key differences from ZUGFeRD:
- No PDF embedding — just the XML file
- Stricter field requirements (many optional EN 16931 fields become mandatory)
- Must be submitted via the federal OZG-RE portal or the relevant state portal
- Identified by the `CustomizationID`: `urn:cen.eu:en16931:2017#compliant#urn:xoev-de:kosit:standard:xrechnung_X.X`

**Template in InvoicePlane:** `XRechnungv30` (or similar) — download from the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

---

## CII XML structure

A CII invoice follows this top-level structure:

```xml
<rsm:CrossIndustryInvoice
    xmlns:rsm="urn:un:unece:uncefact:data:standard:CrossIndustryInvoice:100"
    xmlns:ram="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100"
    xmlns:udt="urn:un:unece:uncefact:data:standard:UnqualifiedDataType:100">

  <rsm:ExchangedDocumentContext>
    <ram:GuidelineSpecifiedDocumentContextParameter>
      <ram:ID>urn:cen.eu:en16931:2017</ram:ID>
    </ram:GuidelineSpecifiedDocumentContextParameter>
  </rsm:ExchangedDocumentContext>

  <rsm:ExchangedDocument>
    <ram:ID>INV-2025-0042</ram:ID>
    <ram:TypeCode>380</ram:TypeCode>
    <ram:IssueDateTime>...</ram:IssueDateTime>
  </rsm:ExchangedDocument>

  <rsm:SupplyChainTradeTransaction>
    <ram:IncludedSupplyChainTradeLineItem>...</ram:IncludedSupplyChainTradeLineItem>
    <ram:ApplicableHeaderTradeAgreement>...</ram:ApplicableHeaderTradeAgreement>
    <ram:ApplicableHeaderTradeDelivery>...</ram:ApplicableHeaderTradeDelivery>
    <ram:ApplicableHeaderTradeSettlement>...</ram:ApplicableHeaderTradeSettlement>
  </rsm:SupplyChainTradeTransaction>

</rsm:CrossIndustryInvoice>
```

For Factur-X and ZUGFeRD, the `GuidelineSpecifiedDocumentContextParameter/ID` includes the profile URN, such as `urn:factur-x.eu:1p0:en16931`.

---

## When to use CII

Choose CII-based formats when:

- Your client is a German company (use ZUGFeRD — see [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x))
- You are invoicing a French company or the French government (use Factur-X — see [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x))
- You are invoicing the German federal or state government (use XRechnung — see examples below)
- Your client or their country specifically requires a CII-syntax invoice

For countries using the Peppol network (Belgium, Sweden, Czech B2G, etc.), use [UBL via Peppol BIS Billing 3.0](/en/1.7/e-invoicing/ubl).

---

## Examples

### XRechnung — Germany B2G

XRechnung is mandatory for invoices to German federal and state government entities. It is a standalone CII XML file — no PDF embedding. Stricter field requirements than ZUGFeRD EN16931.

**Template:** `XRechnungv30` — download from the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices).

German VAT numbers start with `DE` followed by 9 digits.

#### Federal government example

| Field | Value |
|---|---|
| Company name | Bundesministerium der Finanzen |
| Street address | Wilhelmstraße 97 |
| Postal code | 10117 |
| City | Berlin |
| Country | Germany |
| Tax ID / VAT number | DE122256884 |
| Leitweg-ID | 991-00001-06 |
| E-Invoicing version | XRechnung 3.0 |

**Leitweg-ID:** A routing identifier that tells the portal which department should receive the invoice. It is provided by the contracting authority in the purchase order or on their supplier portal. Format: `{RouteCode}-{SubRoute}-{CheckDigit}`. Without it, the OZG-RE portal will reject the upload.

**Delivery:** Upload the XML file at [www.ozg-re.de](https://www.ozg-re.de) (federal) or the relevant state portal listed in the purchase order.

---

#### State government example (Bavaria)

| Field | Value |
|---|---|
| Company name | Bayerisches Staatsministerium für Finanzen |
| Street address | Odeonsplatz 4 |
| Postal code | 80539 |
| City | München |
| Country | Germany |
| Tax ID / VAT number | DE811335839 |
| Leitweg-ID | 09-0000-0 |
| E-Invoicing version | XRechnung 3.0 |

**Note:** Some Bavarian municipal entities accept ZUGFeRD instead of XRechnung. Confirm with the contracting authority before generating the invoice.

---

#### Validation

- **KoSIT Validator** — the official German XRechnung validator: [projekte.kosit.org/kosit/validator](https://projekte.kosit.org/kosit/validator)
- Validate before every first submission to a new government entity — field requirements vary slightly between federal and state portals.

---

## Related pages

- [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) — CII embedded in PDF; built-in templates (Germany B2B, France)
- [UBL](/en/1.7/e-invoicing/ubl) — the other EN 16931 syntax; basis of Peppol
- [Setup guide](/en/1.7/e-invoicing/setup)
