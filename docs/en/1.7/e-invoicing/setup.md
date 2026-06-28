# E-Invoicing Setup

This page covers the steps that apply to every e-invoicing format. For format-specific details and country-specific requirements, follow the links at the end of each step.

---

## Requirements

- InvoicePlane 1.7 or later
- PHP 8.1 or higher

Check the version shown in the application footer. If you are on 1.6 or earlier, upgrade first — see [Updating InvoicePlane](/en/1.7/getting-started/updating-ip).

---

## Step 1 — Check which templates are available

InvoicePlane ships with two e-invoicing templates built in:

| Template name | Standard | Countries |
|---|---|---|
| Factur-X EN16931 | Factur-X (CII in PDF/A-3) | France, and other countries accepting Factur-X |
| ZUGFeRD 2.1 EN16931 | ZUGFeRD (CII in PDF/A-3) | Germany (B2B), and other countries accepting ZUGFeRD |

For all other formats — Peppol BIS Billing 3.0, ISDOC, FatturaPA, Facturae, XRechnung — you need to install additional template files.

---

## Step 2 — Install additional XML templates

The InvoicePlane project maintains community templates in the [InvoicePlane e-invoices repository](https://github.com/InvoicePlane/InvoicePlane-e-invoices). Each template consists of two files.

**To install a template:**

1. Find the template for your format in the repository
2. Download the configuration file from the `XMLconfigs/` folder in the repository
3. Copy it to `application/helpers/XMLconfigs/` in your InvoicePlane installation
4. Download the generator file from the `XMLtemplates/` folder
5. Copy it to `application/libraries/XMLtemplates/`
6. Reload the browser — the new format appears in the **E-Invoicing version** dropdown on client records

If you need a format that is not in the repository, you can [create a custom template](/en/1.7/e-invoicing/custom-templates).

---

## Step 3 — Fill in the required client fields

Before e-invoicing can work for a client, the following fields on the client record must be filled in:

| Field | Notes |
|---|---|
| Company name | Full legal name of the receiving company |
| Street address | Registered address |
| Postal / ZIP code | |
| City | |
| Country | Must match the country where the client is registered for VAT |
| Tax ID / VAT number | Format varies by country — see country guides |

InvoicePlane will display a validation message listing any missing fields when you try to generate an invoice with e-invoicing active.

Some formats require additional fields on the client record (for example, Italian invoices need a codice destinatario). These are described in the format-specific pages and country guides.

---

## Step 4 — Enable e-invoicing on the client record

1. Open the client record
2. Scroll to the **E-Invoicing** section
3. Switch **E-Invoicing active** to enabled
4. Select the format from the **E-Invoicing version** dropdown
5. Save

Once saved, every new invoice for this client will include the XML output for the selected format.

---

## Step 5 — Generate an invoice and check the output

Create an invoice for the client as usual. After saving, download the PDF.

**For embedded formats (Factur-X, ZUGFeRD):**
The XML is inside the PDF file. To inspect it, open the PDF in Adobe Acrobat Reader and go to View → Show/Hide → Navigation Panes → Attachments. You should see a file named `factur-x.xml` or `ZUGFeRD-invoice.xml`.

**For standalone XML formats (Peppol, XRechnung, ISDOC, FatturaPA, Facturae):**
InvoicePlane saves the XML file alongside the PDF. Download the XML file and open it in a text editor or an online validator to check the output before sending.

---

## Step 6 — Deliver the invoice

How you send the e-invoice depends on the format and country:

| Format | Delivery method |
|---|---|
| Factur-X / ZUGFeRD | Send the PDF directly to the recipient by email or file transfer |
| Peppol BIS Billing 3.0 | Submit via a Peppol access point — see [Peppol](/en/1.7/e-invoicing/peppol) |
| FatturaPA (Italy) | Submit via SdI (Italian tax authority hub) — see [FatturaPA](/en/1.7/e-invoicing/fatturaPA) |
| XRechnung (Germany B2G) | Upload to OZG-RE or state procurement portal |
| Facturae (Spain B2G) | Upload signed XML to FACe portal — see [Facturae](/en/1.7/e-invoicing/facturae) |
| ISDOC (Czech Republic) | Send the XML file directly to the recipient |

---

## Useful links

- [Standards overview](/en/1.7/e-invoicing) — which format to choose
- [Factur-X and ZUGFeRD](/en/1.7/e-invoicing/factur-x) — built-in templates
- [Peppol](/en/1.7/e-invoicing/peppol) — access points and participant IDs
- [Custom XML templates](/en/1.7/e-invoicing/custom-templates) — create your own format
