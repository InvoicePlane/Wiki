# E-Invoicing by Country

This page walks through the steps to set up e-invoicing in InvoicePlane and then provides country-specific guidance for Czech Republic, Belgium, Germany, France, Italy, Spain, and Sweden.

Before continuing, make sure you have read the [E-Invoicing](/en/1.7/modules/e-invoicing) page first — it explains the underlying concepts (UBL, CII, Factur-X/ZUGFeRD, Peppol) that are assumed throughout this guide.

---

## General setup steps

These steps apply regardless of your country.

### 1. Verify your server setup

E-invoicing requires:

- InvoicePlane 1.7 or later
- PHP 8.1 or higher

If you are unsure which version you are running, check the bottom of any page in the application — the version number is shown in the footer.

### 2. Install additional XML templates if needed

InvoicePlane ships with Factur-X and ZUGFeRD templates built in. For other formats (Czech ISDOC, Italian FatturaPA, Spanish Facturae, etc.) you need to add the template files.

The InvoicePlane project maintains additional templates in the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices). To install a template:

1. Download the two files for your format from that repository — a config file ending in `.php` from the `XMLconfigs/` folder and a generator file from the `XMLtemplates/` folder
2. Copy the config file to `application/helpers/XMLconfigs/` in your InvoicePlane installation
3. Copy the generator file to `application/libraries/XMLtemplates/`
4. Reload the client record in your browser — the new format will appear in the **E-Invoicing version** dropdown

You can also write your own templates. See [Adding a Custom XML Template](/en/1.7/modules/e-invoicing#adding-a-custom-xml-template) for instructions.

### 3. Fill in the required client fields

Open the client record and make sure the following are filled in:

- **Company name** — full legal name of the receiving company
- **Street address**, **postal code**, **city**
- **Country** — must match the country where the client is registered
- **Tax ID / VAT number** — the client's tax registration number (format varies by country — see the country sections below)

Missing any of these fields will stop the XML from being generated. InvoicePlane will display a message telling you which fields are absent.

### 4. Enable e-invoicing on the client record

1. Open the client record
2. Scroll to the **E-Invoicing** section
3. Switch **E-Invoicing active** to enabled
4. Select the correct format from the **E-Invoicing version** dropdown
5. Save the client record

### 5. Create an invoice and check the output

Generate an invoice for this client as you normally would. If e-invoicing is active, InvoicePlane will produce the XML alongside the PDF. For embedded formats (Factur-X, ZUGFeRD) the XML is inside the PDF file — open the PDF in Acrobat Reader and look under View → Show/Hide → Navigation Panes → Attachments to see it.

For standalone XML formats, InvoicePlane saves the XML file separately. Check the format generated before sending it to a customer or submitting it to a government portal.

### 6. For Peppol: register with an access point

If your country uses the Peppol network (Belgium, Czech Republic B2G, Sweden, and others), you need an additional step before you can deliver invoices electronically:

1. Find a certified Peppol access point provider in your country
2. Register your company and obtain a **Peppol participant ID** (a GLN-based or VAT-based identifier registered in the Peppol directory)
3. Export the UBL XML from InvoicePlane and submit it through the access point's upload interface or API

InvoicePlane generates the correct UBL XML — the access point handles the delivery.

---

## Czech Republic

### Legal context

There is currently no general mandatory e-invoicing requirement for private-sector B2B invoices in the Czech Republic. For **public-sector contracts (B2G)**, the government requires electronic invoices submitted via the Czech national Peppol connection (ISDOC or Peppol BIS Billing 3.0 are both accepted).

For cross-border trade and future-proofing, **Peppol BIS Billing 3.0** (UBL 2.1) is the recommended approach. For invoices within the Czech Republic, **ISDOC** is the national standard accepted by most Czech accounting software and ERP systems.

### ISDOC (Czech national format)

ISDOC is the Czech national e-invoice format. It is based on UBL and is understood by most Czech accounting software (POHODA, Money S3, Helios, and others).

**Template to use:** `ISDOC` or `ISDOCv6` — download from the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices) and install as described in step 2 above.

**VAT number format:** Czech VAT numbers begin with `CZ` followed by 8–10 digits. Example: `CZ12345678`. Enter this in the **Tax ID / VAT number** field on the client record.

**Example client setup:**

| Field | Example value |
|---|---|
| Company name | Novák s.r.o. |
| Street address | Václavské náměstí 1 |
| Postal code | 110 00 |
| City | Praha |
| Country | Czech Republic |
| Tax ID / VAT number | CZ12345678 |
| E-Invoicing version | ISDOC v6.0.1 |

### Peppol BIS Billing 3.0 (for B2G or cross-border)

If you are invoicing the Czech government or a foreign customer on the Peppol network, use the UBL 2.1 Peppol BIS Billing 3.0 template instead.

**Template to use:** `PeppolBISv3` or similar — download from the e-invoices repository.

After generating the UBL XML, submit it through your Peppol access point. Czech B2G invoices go through the Czech national NIPEZ portal, which is connected to the Peppol network.

---

## Belgium

### Legal context

Belgium was among the first countries to mandate e-invoicing. **B2G (government) invoices** have been mandatory via Peppol since 2019. **B2B e-invoicing** became mandatory for all Belgian companies on 1 January 2026 under the Flanders and federal mandate. All mandatory invoices must use Peppol BIS Billing 3.0.

### Peppol BIS Billing 3.0

**Template to use:** `PeppolBISv3` (UBL 2.1) — download from the e-invoices repository.

**VAT number format:** Belgian VAT numbers begin with `BE` followed by 10 digits. Example: `BE0123456789`.

Belgian invoices sent via Peppol must include the **buyer's Peppol participant ID** in the XML. Ask your client for their Peppol ID before generating the invoice. Their Peppol ID is separate from their VAT number — it is a registered identifier in the Peppol directory, often in the format `0088:XXXXXXXXXX` (GLN) or `9925:BEXXXXXXXXXX` (VAT-based).

**Example client setup:**

| Field | Example value |
|---|---|
| Company name | ACME Belgium NV |
| Street address | Wetstraat 16 |
| Postal code | 1000 |
| City | Brussel |
| Country | Belgium |
| Tax ID / VAT number | BE0123456789 |
| E-Invoicing version | Peppol BIS Billing 3.0 |

After generating the XML, submit it through your Belgian Peppol access point provider.

---

## Germany

### Legal context

Germany uses **ZUGFeRD** (Zentraler User Guide des Forums elektronische Rechnung Deutschland), which is a PDF/A-3 invoice with a CII XML attachment embedded in the PDF. ZUGFeRD and Factur-X are technically identical — the difference is the XML filename inside the PDF and the country branding.

As of 2025, **B2B e-invoicing is mandatory for domestic invoices** between German VAT-registered businesses. The required minimum format is ZUGFeRD 2.x at the EN16931 profile or a standalone XRechnung (CII) file.

For **B2G invoices**, the XRechnung format (a standalone CII XML file without PDF embedding) is required on the federal and most state procurement portals.

### ZUGFeRD 2.x (B2B, embedded in PDF)

**Template to use:** `ZUGFeRDv2` or `ZUGFeRD21EN16931` — this template is **built in** to InvoicePlane 1.7. Select it in the E-Invoicing version dropdown on the client record.

The embedded XML filename must be `ZUGFeRD-invoice.xml`. This is set automatically by the built-in template.

**VAT number format:** German VAT numbers begin with `DE` followed by 9 digits. Example: `DE123456789`.

**Example client setup:**

| Field | Example value |
|---|---|
| Company name | Muster GmbH |
| Street address | Unter den Linden 1 |
| Postal code | 10117 |
| City | Berlin |
| Country | Germany |
| Tax ID / VAT number | DE123456789 |
| E-Invoicing version | ZUGFeRD 2.1 EN16931 |

### XRechnung (B2G, standalone CII)

For government contracts, use the **XRechnung** template (CII XML, not embedded in PDF).

**Template to use:** `XRechnungv30` or similar — download from the e-invoices repository. XRechnung is a standalone CII file so `embedXML` is `false` in the config.

Upload the generated XML to the federal procurement portal (OZG-RE / Zentrale Rechnungseingangsplattform) or the relevant state portal.

---

## France

### Legal context

France requires e-invoicing via **Factur-X**, which is technically identical to ZUGFeRD — a PDF/A-3 file with a CII XML embedded inside. The embedded XML filename is `factur-x.xml` (instead of ZUGFeRD's `ZUGFeRD-invoice.xml`).

The French mandate for private-sector B2B e-invoicing through the **Chorus Pro** platform is being phased in starting 2026: large companies first, then mid-size companies, then SMEs.

### Factur-X EN16931

**Template to use:** `FacturXEN16931` — this template is **built in** to InvoicePlane 1.7. Select it in the E-Invoicing version dropdown.

The embedded XML filename must be `factur-x.xml`. This is set automatically by the built-in template.

**VAT number format:** French VAT numbers begin with `FR` followed by 2 characters (letters or digits) and 9 digits. Example: `FR12345678901`.

**SIREN / SIRET:** French companies also have a SIREN (9 digits) and SIRET (14 digits) identifier. Some Factur-X profiles require the SIRET. If the template you are using asks for this, enter it in the e-invoicing fields on the client record.

**Example client setup:**

| Field | Example value |
|---|---|
| Company name | Dupont SARL |
| Street address | 10 Rue de Rivoli |
| Postal code | 75001 |
| City | Paris |
| Country | France |
| Tax ID / VAT number | FR12345678901 |
| E-Invoicing version | Factur-X EN16931 |

For submission to **Chorus Pro** (mandatory for government contracts), export the Factur-X PDF and upload it to the Chorus Pro portal directly, or connect via their API.

---

## Italy

### Legal context

Italy has had **mandatory e-invoicing for all domestic B2B and B2C invoices since 2019**. Invoices must be submitted through the Italian Revenue Agency's **SdI** (Sistema di Interscambio) in the **FatturaPA** XML format. There is no PDF option — the SdI only accepts FatturaPA XML.

This is more involved than other countries: invoices do not go directly to the customer — they go to SdI, which validates them and forwards them to the recipient.

### FatturaPA

**Template to use:** `FatturaPAv12` or similar — download from the e-invoices repository. FatturaPA is a standalone XML file (not embedded in PDF), so `embedXML` is `false`.

**VAT number format:** Italian VAT numbers begin with `IT` followed by 11 digits. Example: `IT12345678901`. Italian individuals use a fiscal code (codice fiscale) — 16 alphanumeric characters.

**Codice Destinatario / PEC address:** To route the invoice through SdI, you need either the recipient's 7-character **codice destinatario** (a recipient code registered with SdI) or their **PEC** (certified email address). Ask your Italian client for this before generating the first invoice.

**Example client setup:**

| Field | Example value |
|---|---|
| Company name | Bianchi S.r.l. |
| Street address | Via Roma 10 |
| Postal code | 00100 |
| City | Roma |
| Country | Italy |
| Tax ID / VAT number | IT12345678901 |
| E-Invoicing version | FatturaPA v1.2 |

After generating the FatturaPA XML, submit it to SdI using a **certified intermediary** (provider accreditato) or directly through the SdI web portal. SdI will notify you of acceptance or rejection within 5 days.

---

## Spain

### Legal context

Spain uses the **Facturae** format (`.xsig` files, digitally signed XML) for government invoices. B2G e-invoicing via **FACe** (Punto General de Entrada de Facturas Electrónicas) is mandatory for all invoices to public administrations.

Private-sector B2B e-invoicing is being introduced via the **Verifactu** system and the broader B2B mandate planned for 2026.

### Facturae (B2G)

**Template to use:** `FacturaeV32` or `FacturaeV321` — download from the e-invoices repository. Facturae XML files must be **digitally signed** with a qualified electronic certificate (certificado electrónico) before submission. InvoicePlane generates the unsigned XML — you will need a separate tool or your access point provider to apply the signature.

**VAT number format:** Spanish VAT numbers begin with `ES` followed by a letter, 7 digits, and a control character. Example: `ESB12345678`.

**Example client setup:**

| Field | Example value |
|---|---|
| Company name | García S.L. |
| Street address | Calle Mayor 5 |
| Postal code | 28013 |
| City | Madrid |
| Country | Spain |
| Tax ID / VAT number | ESB12345678 |
| E-Invoicing version | Facturae 3.2.1 |

After signing the XML, upload it to the **FACe** portal or the relevant regional government portal.

### Peppol BIS Billing 3.0 (alternative for cross-border)

For invoices to international customers, use the **Peppol BIS Billing 3.0** (UBL 2.1) template via a Peppol access point instead of Facturae.

---

## Sweden

### Legal context

Sweden was the original driving force behind the Peppol network. Public sector e-invoicing has been mandatory in Sweden since 2019. All government contracts require invoices in **Peppol BIS Billing 3.0** (UBL 2.1) format delivered via a Peppol access point.

Private-sector B2B e-invoicing is encouraged but not currently mandatory for all companies, though many large Swedish companies require it from their suppliers.

### Peppol BIS Billing 3.0

**Template to use:** `PeppolBISv3` (UBL 2.1) — download from the e-invoices repository.

**VAT number format:** Swedish VAT numbers begin with `SE` followed by 12 digits. Example: `SE123456789001`.

**GLN:** Swedish companies often use a **GLN** (Global Location Number) as their Peppol participant ID rather than a VAT-based identifier. Ask your client which identifier they have registered in the Peppol directory.

**Example client setup:**

| Field | Example value |
|---|---|
| Company name | Andersson AB |
| Street address | Kungsgatan 1 |
| Postal code | 111 43 |
| City | Stockholm |
| Country | Sweden |
| Tax ID / VAT number | SE123456789001 |
| E-Invoicing version | Peppol BIS Billing 3.0 |

After generating the UBL XML, submit it through your Peppol access point. For B2G invoices, the recipient's Peppol participant ID is often listed in the purchase order they sent you.

---

## Summary table

| Country | Standard | Template | Delivery |
|---|---|---|---|
| Czech Republic (B2B) | ISDOC | ISDOC v6 (download) | Send XML file to client |
| Czech Republic (B2G) | Peppol BIS Billing 3.0 | PeppolBISv3 (download) | Via Peppol access point → NIPEZ |
| Belgium | Peppol BIS Billing 3.0 | PeppolBISv3 (download) | Via Peppol access point |
| Germany (B2B) | ZUGFeRD 2.1 | **Built-in** | Send PDF (XML embedded) |
| Germany (B2G) | XRechnung | XRechnung (download) | Via OZG-RE portal |
| France | Factur-X EN16931 | **Built-in** | Send PDF (XML embedded) / Chorus Pro |
| Italy | FatturaPA | FatturaPA (download) | Via SdI (certified intermediary) |
| Spain (B2G) | Facturae | Facturae (download) | Via FACe portal (signed XML) |
| Spain (cross-border) | Peppol BIS Billing 3.0 | PeppolBISv3 (download) | Via Peppol access point |
| Sweden | Peppol BIS Billing 3.0 | PeppolBISv3 (download) | Via Peppol access point |
