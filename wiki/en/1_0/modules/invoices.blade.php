@extends('layouts.master')

@section('content')

    <h2 class="page-title">Invoices</h2>

    <h3 id="lifecycle">
        The Invoice Lifecycle <?php IP::headlineLink('/en/1.0/modules/invoices#lifecycle'); ?>
    </h3>

    <p>Invoice statuses follow the lifecycle of an invoice from draft to paid and allow you to keep track of where each
        of your invoices are in their lifecycle. Each of the statuses listed below are automatically set for you when
        specific activity occurs with an invoice, but you may also choose to manually change the status at any time
        during the invoice lifecycle.</p>

    <ul>
        <li><span class="status status-draft">Draft</span><br/>
            When an invoice is first created, it is placed in Draft status by default. Sending an invoice by email will
            automatically change the status from Draft to Sent. Clients cannot view any invoices when they are in Draft
            status.
        </li>
        <li><span class="status status-sent">Sent</span><br/>
            When InvoicePlane sends an invoice to a client by email, it will place the invoice in Sent status. This
            occurs when using the Send Email function and it also occurs when a recurring invoice is automatically
            emailed. Clients can view any of their invoices when they are in Sent status.
        </li>
        <li><span class="status status-viewed">Viewed</span><br/>
            When a client views the invoice by either using the Guest URL to view the invoice or by using their Guest
            Login account (if they have one), the invoice will be placed in Viewed status. This allows you to keep track
            of which invoices a client has looked at.
        </li>
        <li><span class="status status-paid">Paid</span><br/>
            Once an online or offline payment has been made in full against an invoice, the invoice will be placed in
            Paid status.
        </li>
        <li><span class="status status-overdue">Overdue</span><br/>
            Any invoice with a due date prior to the current date will be visible as being overdue. Overdue invoices
            appear in invoice lists with a red due date so they are easily seen.
        </li>
    </ul>

    <p>Besides this lifecycle an invoice can have two other statuses:</p>

    <ul>
        <li><code><i class="fa fa-read-only"></i></code>&nbsp; Read Only<br/>
            An invoice will be set to read-only if the status was changed to paid. The invoice can't be edited anymore
            but you can create a credit invoice if something went wrong or needs to be changed.
        </li>
        <li><code><i class="fa fa-credit-invoice"></i></code>&nbsp; Credit Invoice<br/>
            A credit invoice can be created from an existing invoice and will make a duplicate of the invoice but with a
            negative amount. This means by default that the balance of both invoices is zero.
        </li>
    </ul>

    <h3 id="view">
        Viewing Invoices <?php IP::headlineLink('/en/1.0/modules/quotes#view-quote'); ?>
    </h3>

    <p>To view the invoice list, click <code>Invoices</code> from the main menu and select <code>View Invoices</code>.
    </p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_invoices.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_invoices.jpg">
        </a>
    </p>

    <p>By default, the invoice list will show all invoices. The filter can be set to <code>All</code>, <code
                class="status-draft">Draft</code>, <code class="status-sent">Sent</code>, <code class="status-viewed">Viewed</code>,
        <code class="status-paid">Paid</code> or <code class="status-overdue">Overdue</code> by choosing the filter from
        the submenu bar.<br/>
        To navigate between pages, use the pager buttons located on the submenu bar.</p>

    <p>The <code>Options</code> button at the end of each row displays a menu with a number of items when clicked:</p>

    <ul>
        <li><code>Edit</code> - View the quote</li>
        <li><code>Download PDF</code> - Download a copy of the quote as PDF</li>
        <li><code>Send Email</code> - Send the quote to the client via email</li>
        <li><code>Enter Payment</code> - Enter a payment for this invoice</li>
        <li><code>Delete</code> - Delete the invoice*</li>
    </ul>

    <p class="small">* This is only available for invoices with the draft status or if Invoice Deletion was enabled.</p>

    <h3 id="add">
        Creating an Invoice <?php IP::headlineLink('/en/1.0/modules/invoices#add'); ?>
    </h3>

    <p>To create a new invoice, either choose <code>Invoices</code> from the main menu and select <code>Create
            Invoice</code>, or from the invoice list, click the <code>New</code> button near the top right of the page.
    </p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_invoices_add.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_invoices_add.jpg">
        </a>
    </p>

    <p>When creating a invoice, start typing the name of the client to create the invoice for. If it\'s an existing
        client, choose their name from the list that appears. If it's a new client, type their full name or business
        name. Choose the date and invoice group and press the <code class="green">Submit</code> button.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_invoices_edit.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_invoices_edit.jpg">
        </a>
    </p>

    <p>The <code>Options</code> button near the top of the edit invoice page displays a menu with a number of items when
        clicked:</p>

    <ul>
        <li><code>Add Invoice Tax</code> - Apply a tax to the entire invoice</li>
        <li><code>Enter Payment</code> - Enter a payment for the invoice</li>
        <li><code>Download PDF</code> - Download a copy of the invoice as PDF</li>
        <li><code>Send Email</code> - Send the invoice to the client via email</li>
        <li><code>Copy Invoice</code> - Create a copy of the invoice</li>
        <li><code>Create Recurring</code> - Set the invoice to recurring</li>
        <li><code>Delete</code> - Delete the invoice*</li>
    </ul>

    <p class="small">* Invoice deletion is not available for all invoices. Please see the </p>

    <h4 id="add-products">
        Add Products <?php IP::headlineLink('/en/1.0/modules/invoices#add-products'); ?>
    </h4>

    <p>To add saved products, press the <code>Add Product</code> button. Choose the product you want to add and mark the
        checkbox on the left, then press <code class="green">Submit</code> to insert the products into the quote.<br/>
        You can edit the quantity, prices or taxes for each product. When finished, press the <code
                class="green">Save</code> button.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_add_product.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_add_product.jpg">
        </a>
    </p>

    <h4 id="item-order">
        Changing Item Order <?php IP::headlineLink('/en/1.0/modules/invoices#item-order'); ?>
    </h4>

    <p>The order in which an item appears on a quote or invoice can be changed by dragging the row to a new position
        with the <code><i class="fa fa-bars"></i></code> icon.</p>

    <h4 id="add-tax">
        Adding Tax <?php IP::headlineLink('/en/1.0/modules/invoices#add-tax'); ?>
    </h4>

    <p>To apply a tax against the entire invoice, choose <code>Add Invoice Tax</code> from the Options button. Choose
        the appropriate tax rate and placement from the window that appears and press the <code>Submit</code> button.
        That tax will be calculated against the invoice total.</p>

    <h4 id="copy">
        Copying an Invoice <?php IP::headlineLink('/en/1.0/modules/invoices#copy'); ?>
    </h4>

    <p>To copy an invoice, choose <code>Copy Invoice</code> from the <code>Options</code> menu. Change the client name,
        if appropriate, and then select the invoice date and invoice group and press the <code
                class="green">Submit</code> button. All items, taxes and amounts from the source invoice will be copied
        to a new invoice.</p>

    <h3 id="delete">
        Invoice Deletion <?php IP::headlineLink('/en/1.0/modules/invoices#delete'); ?>
    </h3>

    <p>By default InvoicePlane prevents the deletion of invoices because it's legally forbidden to delete invoices that
        were sent to customers. We decided that it should be not possible to delete invoices that are beyond the <code
                class="status-draft">Draft</code> status.<br/>
        But you can still enable invoice deletion even if it's not recommended. Open <code>/application/config/config.php</code>
        and replace<br/>
        <code>$config['enable_invoice_deletion'] = FALSE;</code><br/>
        with<br/>
        <code>$config['enable_invoice_deletion'] = TRUE;</code></p>

    <h3 id="read-only">
        Read-only <?php IP::headlineLink('/en/1.0/modules/invoices#read-only'); ?>
    </h3>

    <p>InvoicePlane will set invoices to read-only based on its status and the invoice can't be changed anymore. You can change the status that will be used for the read-only mode in the settings.<br/>
        If you don't want invoices to be set to read-only you can disable this feature. Open <code>/application/config/config.php</code>
        and replace<br/>
        <code>$config['disable_read_only'] = FALSE;</code><br/>
        with<br/>
        <code>$config['disable_read_only'] = TRUE;</code></p>


    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/modules/quotes',
                    'title' => 'Quotes',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/modules/recurring-invoices',
                    'title' => 'Recurring Invoices',
                    'type' => 'article'
            )
    );
    ?>

@stop