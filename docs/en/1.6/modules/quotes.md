# Quotes

## The Quote Lifecycle

Quote statuses follow the lifecycle of a quote from draft to approved and allow you to keep track of where each
of your quotes are in their lifecycle. Each of the statuses listed below are automatically set for you when
specific activity occurs with a quote but you may also choose to manually change the status at any time during
the quote lifecycle.

- Draft
  When a quote is first created, it is placed in Draft status by default. Sending a quote by email will
  automatically change the status from Draft to Sent. Clients cannot view any quotes when they are in Draft
  status.
- Sent
  When InvoicePlane sends a quote to a client by email the status will be changed to Sent.
- Viewed
  When a client views the quote by either using the Guest URL to view quote or by using their Guest Login
  account (if they have one), the quote will be placed in Viewed status. This allows you to keep track of
  which quotes a client has looked at.
- Approved
  When a client uses the guest URL to view a quote or logs in using a guest account and views a quote, they
  are able to either approve or reject the quote. When a client approves a quote, the status is changed to
  Approved.
- Rejected
  When a client uses the guest URL to view a quote or logs in using a guest account and views a quote, they
  are able to either approve or reject the quote. When a client rejects a quote, the status is changed to
  Rejected.
- Canceled
  This status can be used for quotes that are not going to make it to the invoicing stage but need to be kept
  for reference purposes. Clients are not able to see quotes in this status.

## Viewing Quotes

To view the quote list, click `Quotes` from the main menu and select `View Quotes`.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_quotes.jpg)](https://invoiceplane.com/content/screenshots/web/ip_quotes.jpg)

By default, the quote list will be filtered to all quotes. The filter can be set to `All`, `Draft`, `Sent`, `Viewed`,
`Approved`, `Rejected` or `Canceled` by choosing the filter from the submenu bar.
To navigate between pages, use the pager buttons located on the submenu bar.

The `Options` button at the end of each row displays a menu with a number of items when clicked:

- `Edit` - View the quote
- `Download PDF` - Download a copy of the quote as PDF
- `Send Email` - Send the quote to the client via email
- `Delete` - Delete the quote

## Creating a Quote

To create a new quote, either choose `Quotes` from the main menu and select `Create Quote`,
or from the quote list, click the `New` button near the top right of the page.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_quotes_add.jpg)](https://invoiceplane.com/content/screenshots/web/ip_quotes_add.jpg)

When creating a quote, start typing the name of the client to create the quote for. If it's an existing client,
choose their name from the list that appears. If it's a new client, type their full name or business name.
Choose the date and invoice group and submit the form.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_quotes_edit.jpg)](https://invoiceplane.com/content/screenshots/web/ip_quotes_edit.jpg)

The `Options` button near the top of the edit quotes page displays a menu with a number of items when
clicked:

- `Add Quote Tax` - Apply a tax to the entire quote
- `Download PDF` - Download a copy of the quote as PDF
- `Send Email` - Send the quote to the client via email
- `Quote to Invoice` - Convert the quote to an invoice
- `Copy Quote` - Create a copy of the quote
- `Delete` - Delete the quote

### Adding Products

To add saved products, press the `Add Product` button. Choose the product you want to add and mark the
checkbox on the left, then press `Submit` to insert the products into the quote.
You can edit the quantity, prices or taxes for each product. When finished, press the `Save` button.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_add_product.jpg)](https://invoiceplane.com/content/screenshots/web/ip_add_product.jpg)

### Changing Item Order

The order in which an item appears on a quote or invoice can be changed by dragging the row to a new position
with the  icon.

### Discounts

With the release of InvoicePlane 1.4.0 we introduced discounts for each quotes and invoices. There are two separate types of discounts which can by applied:

- Item Discounts
- Quote Discounts

#### Item Discounts

Item discounts can be added for each item itself as an amount that will be subtract from the item subtotal. Item discounts can only be added as an amount, not as an percentage.

#### Quote Discounts

Quote discounts can be added for the whole quote directly above the quote total. You can either choose to add a discount as an amount (e.g. 200 $) or as a percentage of the subtotal (e.g. 5%).

### Add Tax to Quote

To apply a tax against the entire quote, choose `Add Quote Tax` from the `Options` button.
Choose the appropriate tax rate and placement from the window that appears and press the `Submit`
button. That tax will be calculated against the quote total.

> **Warning:**
> Caution! Do not mix item and quote taxes. Both tax methods were implemented for countries with different law structures and do not work together very well. If you use both tax method at the same time we can't promise that all calculations are executed correctly.
>
> Also, do **not** use item taxes to apply any service charges or similar extra charges. If you need to apply charges, add a new item or calculate the charges manually.

### Copying the Quote

To copy a quote, choose `Copy Quote` from the `Options` button on the edit quote page.
Change the client name, if appropriate, and then select the quote date and quote group and submit the form. All
items, taxes and amounts from the source quote will be copied to a new quote.

### Generate Invoice from Quote

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_quotes_quote_to_invoice.jpg)](https://invoiceplane.com/content/screenshots/web/ip_quotes_quote_to_invoice.jpg)

When a client accepts a quote, you can convert that quote to an invoice by using the `Quote to
Invoice` menu item from the `Options` button. Choose the invoice date and invoice group and
press the `Submit` button. The items from the quote will be copied over to your new
invoice.
