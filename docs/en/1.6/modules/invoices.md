# Invoices

## The Invoice Lifecycle

Invoice statuses follow the lifecycle of an invoice from draft to paid and allow you to keep track of where each
of your invoices are in their lifecycle. Each of the statuses listed below are automatically set for you when
specific activity occurs with an invoice, but you may also choose to manually change the status at any time
during the invoice lifecycle.

- Draft
  When an invoice is first created, it is placed in Draft status by default. Sending an invoice by email will
  automatically change the status from Draft to Sent. Clients cannot view any invoices when they are in Draft
  status.
- Sent
  When InvoicePlane sends an invoice to a client by email, it will place the invoice in Sent status. This
  occurs when using the Send Email function and it also occurs when a recurring invoice is automatically
  emailed. Clients can view any of their invoices when they are in Sent status.
- Viewed
  When a client views the invoice by either using the Guest URL to view the invoice or by using their Guest
  Login account (if they have one), the invoice will be placed in Viewed status. This allows you to keep track
  of which invoices a client has looked at.
- Paid
  Once an online or offline payment has been made in full against an invoice, the invoice will be placed in
  Paid status.
- Overdue
  Any invoice with a due date prior to the current date will be visible as being overdue. Overdue invoices
  appear in invoice lists with a red due date so they are easily seen.

Besides this lifecycle an invoice can have two other statuses:

- Read Only
  An invoice will be set to read-only if the status was changed to paid. The invoice can't be edited anymore
  but you can create a credit invoice if something went wrong or needs to be changed.
- Credit Invoice
  A credit invoice can be created from an existing invoice and will make a duplicate of the invoice but with a
  negative amount. This means by default that the balance of both invoices is zero.

## Viewing Invoices

To view the invoice list, click `Invoices` from the main menu and select `View Invoices`.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_invoices.jpg)](https://invoiceplane.com/content/screenshots/web/ip_invoices.jpg)

By default, the invoice list will show all invoices. The filter can be set to `All`, `Draft`, `Sent`, `Viewed`,
`Paid` or `Overdue` by choosing the filter from
the submenu bar.
To navigate between pages, use the pager buttons located on the submenu bar.

The `Options` button at the end of each row displays a menu with a number of items when clicked:

- `Edit` - View the quote
- `Download PDF` - Download a copy of the quote as PDF
- `Send Email` - Send the quote to the client via email
- `Enter Payment` - Enter a payment for this invoice
- `Delete` - Delete the invoice\*

\* This is only available for invoices with the draft status or if Invoice Deletion was enabled.

## Creating an Invoice

To create a new invoice, either choose `Invoices` from the main menu and select `Create
Invoice`, or from the invoice list, click the `New` button near the top right of the page.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_invoices_add.jpg)](https://invoiceplane.com/content/screenshots/web/ip_invoices_add.jpg)

When creating a invoice, start typing the name of the client to create the invoice for. If it\'s an existing
client, choose their name from the list that appears. If it's a new client, type their full name or business
name. Choose the date and invoice group and press the `Submit` button.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_invoices_edit.jpg)](https://invoiceplane.com/content/screenshots/web/ip_invoices_edit.jpg)

The `Options` button near the top of the edit invoice page displays a menu with a number of items when
clicked:

- `Add Invoice Tax` - Apply a tax to the entire invoice
- `Enter Payment` - Enter a payment for the invoice
- `Download PDF` - Download a copy of the invoice as PDF
- `Send Email` - Send the invoice to the client via email
- `Copy Invoice` - Create a copy of the invoice
- `Create Recurring` - Set the invoice to recurring
- `Delete` - Delete the invoice\*

\* Invoice deletion is not available for all invoices. Please read the information for [invoice deletion](/en/1.6/modules/invoices#delete).

### Add Products

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
- Invoice Discounts

#### Item Discounts

Item discounts can be added for each item itself as an amount that will be subtract from the item subtotal. Item discounts can only be added as an amount, not as an percentage.

#### Invoice Discounts

Invoice discounts can be added for the whole invoice directly above the invoice total. You can either choose to add a discount as an amount (e.g. 200 $) or as a percentage of the subtotal (e.g. 5%).

### Adding Taxes

To apply a tax against the entire invoice, choose `Add Invoice Tax` from the Options button. Choose
the appropriate tax rate and placement from the window that appears and press the `Submit` button.
That tax will be calculated against the invoice total.

> **Warning:**
> Caution! Do not mix item and invoice taxes. Both tax methods were implemented for countries with different law structures and do not work together very well. If you use both tax method at the same time we can't promise that all calculations are executed correctly.
>
> Also, do **not** use item taxes to apply any service charges or similar extra charges. If you need to apply charges, add a new item or calculate the charges manually.

### Copying an Invoice

To copy an invoice, choose `Copy Invoice` from the `Options` menu. Change the client name,
if appropriate, and then select the invoice date and invoice group and press the `Submit` button. All items, taxes and amounts from the source invoice will be copied
to a new invoice.

---

## Invoice Deletion

By default InvoicePlane prevents the deletion of invoices because it's legally forbidden to delete invoices that
were sent to customers. We decided that it should be not possible to delete invoices that are beyond the `Draft` status.
But you can still enable invoice deletion even if it's not recommended. Open `/application/config/config.php`
and replace
`$config['enable_invoice_deletion'] = FALSE;`
with
`$config['enable_invoice_deletion'] = TRUE;`
To see the delete option in the pulldown, you also need to replace
`$config['disable_read_only'] = FALSE;`
with
`$config['disable_read_only'] = TRUE;`


Read only needs to be disabled, otherwise the options menu is not complete.

## Read-only

InvoicePlane will set invoices to read-only based on its status and the invoice can't be changed anymore. You can
change the status that will be used for the read-only mode in the settings.
If you don't want invoices to be set to read-only you can disable this feature. Open `/application/config/config.php`
and replace
`$config['disable_read_only'] = FALSE;`
with
`$config['disable_read_only'] = TRUE;`
