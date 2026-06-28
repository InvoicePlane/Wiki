# Quickstart

## Logging In

If InvoicePlane was installed into the root of your web server:

`http://www.your-domain.com`

If InvoicePlane was installed into its own subdirectory of your web server:

`http://www.your-domain.com/the-subdirectory`

---

## Configure the Application

Before you start with invoicing you should check the application settings on `http://www.your-domain.com/settings`
and set for example the currency, how the amounts should be formatted and so on.

More information about available settings can be found on the [Settings](/en/1.7/modules/settings)
page.

---

## Adding a Client

Click `Clients` from the main menu at the top of the page and select `Add Client`. Fill in
as much information as needed and submit the form.

More information about the client management can be found on the [Clients](/en/1.7/modules/clients)
page.

---

## Adding Products

If you have products which should appear on your invoices or quotes you can create them form the
`Products` menu.

More information about products can be found on the [Products](/en/1.7/modules/products)
page.

---

## Creating an Invoice

Click `Invoices` from the main menu at the top of the page and select `Create Invoice`.
Start typing the client name into the `Client` box. If the client already exists in InvoicePlane,
select the client from the list which appears after you start typing. If the client does not already exist in
InvoicePlane, continue typing the client\'s name and that client will be added as a new record.
Then choose the invoice date and invoice group and submit the form.

If you added some products before you can simply add them via the `Add Product` button left from the
`Save` button. If you want to enter some items manually you can use the empty row or
add new rows with the `Add new Row` button.

### Send the invoice

If viewing a list of invoices, click the `Options` button on the row of the invoice to send. If
viewing a single invoice, click the Options button near the top right of the page. Select `Send
Email` from the `Options` button, review the information and submit the form. The client
will receive an email with the invoice attached as a PDF.

---

## Entering a Payment

Offline payments are entered by clicking `Payments` from the main menu at the top of the page and
selecting `Enter Payment`. Fill in the appropriate information and submit the form to enter the
payment.

Online payments allow a client to pay their invoice online. When an online payment occurs, the payment is
automatically entered back into InvoicePlane, eliminating the need to manually enter an offline payment. Online
payments require additional setup before they can be used.

More information about payments can be found on the [Payments](/en/1.7/modules/payments)
page.
