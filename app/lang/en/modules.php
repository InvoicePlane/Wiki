<?php
return array(

    /*
     * ==============================
     * Clients
     */
    'clients.view_clients'      => 'View Clients',
    'clients.view_clients.view' => 'To view the client list, click <code>Clients</code> from the main menu and select <code>View Clients</code>.',
    'clients.view_clients.explanation' => 'By default, the client list will be filtered to active clients only. The filter can be set to either Active, Inactive or All by choosing the filter from the submenu bar.<br/>
To navigate between pages, use the pager buttons located on the submenu bar.',

    'clients.view_clients.options'      => 'The Options button at the end of each row displays a menu with a number of items when clicked:',
    'clients.view_clients.options.1'    => '<code>View</code> - View the client',
    'clients.view_clients.options.2'    => '<code>Edit</code> - Edit the client',
    'clients.view_clients.options.3'    => '<code>Create Quote</code> - Create a quote for the client',
    'clients.view_clients.options.4'    => '<code>Create Invoice</code> - Create an invoice for the client',
    'clients.view_clients.options.5'    => '<code>Delete</code> - Delete the client',

    'clients.add_clients'           => 'Add new Clients',
    'clients.add_clients.text.1'    => 'To add a new client, either choose <code>Clients</code> from the main menu and select <code>Add Client</code>, or from the client list, click the <code>New</code> button near the top right of the page.',
    'clients.add_clients.text.2'    => 'When adding a new client, the only field required is the <code>Client Name</code> field, although if you plan to email invoices and quotes to your clients, the <code>Email Address</code> field should be filled in as well. Any <a href="/settings/custom-fields">custom fields</a> created for client records will display at the bottom of the client form.',

    'clients.client_login'      => 'Client Logins',
    'clients.client_login.text' => 'Clients can be granted permission to log into InvoicePlane to view their quotes and invoices, approve or reject quotes and pay their invoices. See the <a href="/settings/user-accounts">Guest Account section</a> of the User Accounts page for instructions on creating logins for your clients.',

    /*
     * ==============================
     * Quotes
     */
    'quotes.lifecycle'      => 'The Quote Lifecycle',
    'quotes.lifecycle.text' => 'Quote statuses follow the lifecycle of a quote from draft to approved and allow you to keep track of where each of your quotes are in their lifecycle. Each of the statuses listed below are automatically set for you when specific activity occurs with a quote but you may also choose to manually change the status at any time during the quote lifecycle.',
    'quotes.lifecycle.status.draft'     => '<span class="status status-draft">Draft</span><br/>
When a quote is first created, it is placed in Draft status by default. Sending a quote by email will automatically change the status from Draft to Sent. Clients cannot view any quotes when they are in Draft status.',
    'quotes.lifecycle.status.sent'      => '<span class="status status-sent">Sent</span><br/>
When InvoicePlane sends a quote to a client by email the status will be changed to Sent.',
    'quotes.lifecycle.status.viewed'    => '<span class="status status-viewed">Viewed</span><br/>
When a client views the quote by either using the Guest URL to view quote or by using their Guest Login account (if they have one), the quote will be placed in Viewed status. This allows you to keep track of which quotes a client has looked at.',
    'quotes.lifecycle.status.approved'  => '<span class="status status-approved">Approved</span><br/>
When a client uses the guest URL to view a quote or logs in using a guest account and views a quote, they are able to either approve or reject the quote. When a client approves a quote, the status is changed to Approved.',
    'quotes.lifecycle.status.rejected'  => '<span class="status status-rejected">Rejected</span><br/>
When a client uses the guest URL to view a quote or logs in using a guest account and views a quote, they are able to either approve or reject the quote. When a client rejects a quote, the status is changed to Rejected.',
    'quotes.lifecycle.status.canceled'  => '<span class="status status-canceled">Canceled</span><br/>
This status can be used for quotes that are not going to make it to the invoicing stage but need to be kept for reference purposes. Clients are not able to see quotes in this status.',

    'quotes.view_quotes'      => 'Viewing Quotes',
    'quotes.view_quotes.text.1' => 'To view the quote list, click <code>Quotes</code> from the main menu and select <code>View Quotes</code>.',
    'quotes.view_quotes.text.2' => 'By default, the quote list will be filtered to all quotes. The filter can be set to All, Draft, Sent, Viewed, Approved, Rejected or Canceled by choosing the filter from the submenu bar.<br/>
To navigate between pages, use the pager buttons located on the submenu bar.',
    'quotes.view_quotes.options' => 'The Options button at the end of each row displays a menu with a number of items when clicked:',
    'quotes.view_quotes.options.1' => '<code>Edit</code> - View the quote',
    'quotes.view_quotes.options.2' => '<code>Download PDF</code> - Download a copy of the quote as PDF',
    'quotes.view_quotes.options.3' => '<code>Send Email</code> - Send the quote to the client via email',
    'quotes.view_quotes.options.4' => '<code>Delete</code> - Delete the quote',

    'quotes.create_quote'      => 'Creating a Quote',
    'quotes.create_quote.text.1' => 'To create a new quote, either choose <code>Quotes</code> from the main menu and select <code>Create Quote</code>, or from the quote list, click the <code>New</code> button near the top right of the page.',
    'quotes.create_quote.text.2' => 'When creating a quote, start typing the name of the client to create the quote for. If it\'s an existing client, choose their name from the list that appears. If it\'s a new client, type their full name or business name. Choose the date and invoice group and submit the form.',
    'quotes.create_quote.text.3' => 'To add the first item, fill in the item, description, quantity and price fields. To add more items, press the Add Item button and repeat. When finished, press the Save button.',

    'quotes.create_quote.options' => 'The <code>Options</code> button near the top of the edit quotes page displays a menu with a number of items when clicked:',
    'quotes.create_quote.options.1' => '<code>Add Quote Tax</code> - Apply a tax to the entire quote',
    'quotes.create_quote.options.2' => '<code>Download PDF</code> - Download a copy of the quote as PDF',
    'quotes.create_quote.options.3' => '<code>Send Email</code> - Send the quote to the client via email',
    'quotes.create_quote.options.4' => '<code>Quote to Invoice</code> - Convert the quote to an invoice',
    'quotes.create_quote.options.5' => '<code>Copy Quote</code> - Create a copy of the quote',
    'quotes.create_quote.options.6' => '<code>Delete</code> - Delete the quote',

    'quotes.create_quote.add_items'      => 'Add Items',
    'quotes.create_quote.add_items.text.1' => 'Pressing the <code>Add Item</code> button will add a new line item. Press it as many times as you have line items to add, fill each line in and press the <code>Save</code> button when finished.',
    'quotes.create_quote.add_items.text.2' => 'Each new line item will have an option to save the item as a lookup. If adding an item which will be frequently added to many quotes or invoices, the item can be saved for future reference.',
    'quotes.create_quote.add_items.text.3' => 'To add an item which has been previously been saved as an item lookup, press the <code>Add Item From Lookup</code> button and choose the item(s) to add to the quote. Be sure and press the <code>Save</code> button after adding items to your quote.',

    'quotes.create_quote.change_order'      => 'Changing Item Order',
    'quotes.create_quote.change_order.text' => 'The order in which an item appears on a quote or invoice can be changed by clicking and dragging the item row to a new position.',

    'quotes.create_quote.add_tax'      => 'Add Tax to Quote',
    'quotes.create_quote.add_tax.text' => 'To apply a tax against the entire quote, choose <code>Add Quote Tax</code> from the <code>Options</code> button. Choose the appropriate tax rate and placement from the window that appears and press the <code>Submit</code> button. That tax will be calculated against the quote total.',

    'quotes.create_quote.copy_quote'      => 'Copying the Quote',
    'quotes.create_quote.copy_quote.text' => 'To copy a quote, choose <code>Copy Quote</code> from the <code>Options</code> button on the edit quote page. Change the client name, if appropriate, and then select the quote date and quote group and submit the form. All items, taxes and amounts from the source quote will be copied to a new quote.',

    'quotes.create_quote.quote_to_invoice'      => 'Generate Invoice from Quote',
    'quotes.create_quote.quote_to_invoice.text' => 'When a client accepts a quote, you can convert that quote to an invoice by using the <code>Quote to Invoice</code> menu item from the <code>Options</code> button. Choose the invoice date and invoice group and press the Submit button. The items from the quote will be copied over to your new invoice.',

    /*
     * ==============================
     * Invoices
     */
    'invoices.lifecycle'      => 'The Invoice Lifecycle',
    'invoices.lifecycle.text' => 'Invoice statuses follow the lifecycle of an invoice from draft to paid and allow you to keep track of where each of your invoices are in their lifecycle. Each of the statuses listed below are automatically set for you when specific activity occurs with an invoice, but you may also choose to manually change the status at any time during the invoice lifecycle.',
    'invoices.lifecycle.status.draft'       => '<span class="status status-draft">Draft</span><br/>
When an invoice is first created, it is placed in Draft status by default. Sending an invoice by email will automatically change the status from Draft to Sent. Clients cannot view any invoices when they are in Draft status.',
    'invoices.lifecycle.status.sent'        => '<span class="status status-sent">Sent</span><br/>
When InvoicePlane sends an invoice to a client by email, it will place the invoice in Sent status. This occurs when using the Send Email function and it also occurs when a recurring invoice is automatically emailed. Clients can view any of their invoices when they are in Sent status.',
    'invoices.lifecycle.status.viewed'      => '<span class="status status-viewed">Viewed</span><br/>
When a client views the invoice by either using the Guest URL to view the invoice or by using their Guest Login account (if they have one), the invoice will be placed in Viewed status. This allows you to keep track of which invoices a client has looked at.',
    'invoices.lifecycle.status.paid'        => '<span class="status status-paid">Paid</span><br/>
Once an online or offline payment has been made in full against an invoice, the invoice will be placed in Paid status.',
    'invoices.lifecycle.status.overdue'     => '<span class="status status-overdue">Overdue</span><br/>
Any invoice with a due date prior to the current date will be visible as being overdue. Overdue invoices appear in invoice lists with a red due date so they are easily seen.',

    'invoices.create_invoice'  => 'Creating an Invoice',
    'invoices.create_invoice.text.1'  => 'To create a new invoice, either choose <code>Invoices</code> from the main menu and select <code>Create Invoice</code>, or from the invoice list, click the <code>New</code> button near the top right of the page.',
    'invoices.create_invoice.text.2'  => 'When creating a invoice, start typing the name of the client to create the invoice for. If it\'s an existing client, choose their name from the list that appears. If it\'s a new client, type their full name or business name. Choose the date and invoice group and press the <code>Submit</code> button.',
    'invoices.create_invoice.text.3'  => 'To add the first item, fill in the item, description, quantity and price fields. To add more items, press the <code>Add Item</code> button and repeat. When finished, press the <code>Save</code> button.',

    'invoices.create_invoice.options'  => 'The <code>Options</code> button near the top of the edit quotes page displays a menu with a number of items when clicked:',
    'invoices.create_invoice.options.1'  => '<code>Add Invoice Tax</code> - Apply a tax to the entire invoice',
    'invoices.create_invoice.options.2'  => '<code>Enter Payment</code> - Enter a payment for the invoice',
    'invoices.create_invoice.options.3'  => '<code>Download PDF</code> - Download a copy of the invoice as PDF',
    'invoices.create_invoice.options.4'  => '<code>Send Email</code> - Send the invoice to the client via email',
    'invoices.create_invoice.options.5'  => '<code>Copy Invoice</code> - Create a copy of the invoice',
    'invoices.create_invoice.options.6'  => '<code>Create Recurring</code> - Set the invoice to recurring',
    'invoices.create_invoice.options.7'  => '<code>Delete</code> - Delete the invoice',

    'invoices.add_items'         => 'Adding Items',
    'invoices.add_items.text.1'  => 'Pressing the <code>Add Item</code> button will add a new line item. Press it as many times as you have line items to add, fill each line in and press the <code>Save</code> button when finished.',
    'invoices.add_items.text.2'  => 'Each new line item will have an option to save the item as a lookup. If adding an item which will be frequently added to many quotes or invoices, the item can be saved for future reference.',
    'invoices.add_items.text.3'  => 'To add an item which has been previously been saved as an item lookup, press the <code>Add Item From Lookup</code> button and choose the item(s) to add to the quote. Be sure and press the <code>Save</code> button after adding items to your quote.',

    'invoices.item_order'       => 'Changing Item Order',
    'invoices.item_order.text'    => 'The order in which an item appears on a quote or invoice can be changed by clicking and dragging the item row to a new position.',

    'invoices.add_tax'          => 'Adding Tax',
    'invoices.add_tax.text'     => 'To apply a tax against the entire invoice, choose <code>Add Invoice Tax</code> from the Options button. Choose the appropriate tax rate and placement from the window that appears and press the <code>Submit</code> button. That tax will be calculated against the invoice total.',

    'invoices.copy_invoice'         => 'Copying an Invoice',
    'invoices.copy_invoice.text'    => 'To copy an invoice, choose <code>Copy Invoice</code> from the <code>Options</code> menu. Change the client name, if appropriate, and then select the invoice date and invoice group and press the <code>Submit</code> button. All items, taxes and amounts from the source invoice will be copied to a new invoice.',

    /*
     * Recurring Invoices
     */
    'recurring_invoices'         => 'Copying an Invoice',
    'recurring_invoices.intro'    => 'Oftentimes instead of sending an invoice as a one time charge, you need to send an email to a client on a schedule. For example, you may be offering web hosting to your clients, and most likely they are paying for your services once a month, once a year, etc. It would be a bummer to have to remember to create these invoices every month, wouldn\'t it? InvoicePlane can keep this sorted for you.',

    'recurring_invoices.requirements'         => 'Requirements',
    'recurring_invoices.requirements.text.1'    => 'For recurring invoices to generate properly, you must create a <a href="/help/cron">CRON job</a> or a scheduled task to open the following URL once per day:',
    'recurring_invoices.requirements.text.2'    => 'Replace <code>your-cron-key-here</code> with the generated cron key in <a href="/settings/general">System Settings</a>.',

    'recurring_invoices.create_invoice'         => 'Creating a recurring Invoice',
    'recurring_invoices.create_invoice.text.1'    => 'To create an invoice which will automatically recur at a specific frequency, the first step is to create the first invoice and get it sent to your client as you normal would. Once the first invoice has been created, it can be set up as a recurring invoice by selecting <code>Create Recurring</code> from the <code>Options</code> menu.',
    'recurring_invoices.create_invoice.text.2'    => 'The invoice can be set to recur every week, month, year, quarter or six months. Since the first invoice has already been created, the start date should be set to the next date this particular invoice should recur on. Generally the start date should be a date in the future. If the invoice should stop recurring on a particular date, then enter an end date as well. If the invoice should recur perpetually, then leave the end date empty.',

    'recurring_invoices.view_invoices'         => 'Viewing Recurring Invoices',
    'recurring_invoices.view_invoices.text'    => 'The list of recurring invoices displays each recurring invoice set up in your system. Recurring invoices may be stopped or deleted from the <code>Options</code> button in the list of recurring invoices.',

    /*
     * Payments
     */
    'payments.view_payments'            => 'Viewing Payments',
    'payments.view_payments.text.1'     => 'To view the payment list, click <code>Payments</code> from the main menu and select <code>View Payments</code>.',
    'payments.view_payments.text.2'     => 'To navigate between pages, use the pager buttons located on the submenu bar.',

    'payments.enter_payments'           => 'Entering a Payment',
    'payments.enter_payments.text.1'    => 'To enter a payment, either choose <code>Payments</code> from the main menu and select <code>Enter Payment</code>, or from the payment list, click the <code>New</code> button near the top right of the page.',
    'payments.enter_payments.text.2'    => 'When entering a payment, first select the invoice to enter the payment for. This will default the invoice amount into the Amount field. Adjust the date and amount, if necessary, and optionally select the payment method and enter any pertinent notes and press the <code>Save</code> button near the top right of the page.',

    'payments.online_payments'         => 'Online Payments',
    'payments.online_payments.text'    => 'InvoicePlane can be configured to allow clients to make payments online. The only payment gateway currently tested with InvoicePlane is PayPal.',

    'payments.online_payments.configure_paypal'         => 'Configure PayPal for Online Payments',
    'payments.online_payments.configure_paypal.text.1'    => 'To configure InvoicePlane integration with PayPal, you must first have valid PayPal API credentials. If you don\'t, follow <a href="https://developer.paypal.com/docs/classic/api/apiCredentials/">these instructions</a> first to obtain the credentials.',

    'payments.online_payments.configure_paypal.steps'    => 'Once you have your API credentials, perform the following in InvoicePlane:',
    'payments.online_payments.configure_paypal.steps.1'    => 'Click the <code>Settings</code> icon and choose the <code>System Settings</code> entry.',
    'payments.online_payments.configure_paypal.steps.2'    => 'Click the <code>Merchant Account</code> tab.',
    'payments.online_payments.configure_paypal.steps.3'    => 'Set <code>Enable Online Payments</code> to <code>Yes</code>.',
    'payments.online_payments.configure_paypal.steps.4'    => 'Choose the appropriate <code>Merchant Driver</code>.',
    'payments.online_payments.configure_paypal.steps.5'    => 'Set the <code>Test Mode</code> to <code>No</code>.',
    'payments.online_payments.configure_paypal.steps.6'    => 'Enter the username, password and signature obtained from PayPal.',
    'payments.online_payments.configure_paypal.steps.7'    => 'Select the appropriate currency code.',
    'payments.online_payments.configure_paypal.steps.8'    => 'Press the <code>Save</code> button.',

    'payments.online_payments.configure_paypal.text.2'    => 'Once configured, send your client the <code>Guest URL</code> (found at the bottom of the Invoice Edit screen) and they will be able to pay their invoice from the link. Optionally, you can also create a Guest User account in which the client can log into and view and pay their invoices.',

);
