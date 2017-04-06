@extends('layouts.master')

@section('title')
    Quotes
@endsection

@section('content')

    <h2 class="page-title">Quotes</h2>

    <h3 id="lifecycle">
        The Quote Lifecycle <?php IP::headlineLink('/en/1.0/modules/quotes#lifecycle'); ?>
    </h3>

    <p>Quote statuses follow the lifecycle of a quote from draft to approved and allow you to keep track of where each
        of your quotes are in their lifecycle. Each of the statuses listed below are automatically set for you when
        specific activity occurs with a quote but you may also choose to manually change the status at any time during
        the quote lifecycle.</p>

    <ul>
        <li><span class="status status-draft">Draft</span><br/>
            When a quote is first created, it is placed in Draft status by default. Sending a quote by email will
            automatically change the status from Draft to Sent. Clients cannot view any quotes when they are in Draft
            status.
        </li>
        <li><span class="status status-sent">Sent</span><br/>
            When InvoicePlane sends a quote to a client by email the status will be changed to Sent.
        </li>
        <li><span class="status status-viewed">Viewed</span><br/>
            When a client views the quote by either using the Guest URL to view quote or by using their Guest Login
            account (if they have one), the quote will be placed in Viewed status. This allows you to keep track of
            which quotes a client has looked at.
        </li>
        <li><span class="status status-approved">Approved</span><br/>
            When a client uses the guest URL to view a quote or logs in using a guest account and views a quote, they
            are able to either approve or reject the quote. When a client approves a quote, the status is changed to
            Approved.
        </li>
        <li><span class="status status-rejected">Rejected</span><br/>
            When a client uses the guest URL to view a quote or logs in using a guest account and views a quote, they
            are able to either approve or reject the quote. When a client rejects a quote, the status is changed to
            Rejected.
        </li>
        <li><span class="status status-canceled">Canceled</span><br/>
            This status can be used for quotes that are not going to make it to the invoicing stage but need to be kept
            for reference purposes. Clients are not able to see quotes in this status.
        </li>
    </ul>

    <h3 id="view-quote">
        Viewing Quotes <?php IP::headlineLink('/en/1.0/modules/quotes#view-quote'); ?>
    </h3>

    <p>To view the quote list, click <code>Quotes</code> from the main menu and select <code>View Quotes</code>.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_quotes.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_quotes.jpg">
        </a>
    </p>

    <p>By default, the quote list will be filtered to all quotes. The filter can be set to <code>All</code>, <code
                class="status-draft">Draft</code>, <code class="status-sent">Sent</code>, <code class="status-viewed">Viewed</code>,
        <code class="status-approved">Approved</code>, <code class="status-rejected">Rejected</code> or <code
                class="status-canceled">Canceled</code> by choosing the filter from the submenu bar.<br/>
        To navigate between pages, use the pager buttons located on the submenu bar.</p>

    <p>The <code>Options</code> button at the end of each row displays a menu with a number of items when clicked:</p>

    <ul>
        <li><code>Edit</code> - View the quote</li>
        <li><code>Download PDF</code> - Download a copy of the quote as PDF</li>
        <li><code>Send Email</code> - Send the quote to the client via email</li>
        <li><code>Delete</code> - Delete the quote</li>
    </ul>

    <h3 id="create-quote">
        Creating a Quote <?php IP::headlineLink('/en/1.0/modules/quotes#create-quote'); ?>
    </h3>

    <p>To create a new quote, either choose <code>Quotes</code> from the main menu and select <code>Create Quote</code>,
        or from the quote list, click the <code>New</code> button near the top right of the page.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_quotes_add.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_quotes_add.jpg">
        </a>
    </p>

    <p>When creating a quote, start typing the name of the client to create the quote for. If it's an existing client,
        choose their name from the list that appears. If it's a new client, type their full name or business name.
        Choose the date and invoice group and submit the form.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_quotes_edit.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_quotes_edit.jpg">
        </a>
    </p>

    <p>The <code>Options</code> button near the top of the edit quotes page displays a menu with a number of items when
        clicked:</p>

    <ul>
        <li><code>Add Quote Tax</code> - Apply a tax to the entire quote</li>
        <li><code>Download PDF</code> - Download a copy of the quote as PDF</li>
        <li><code>Send Email</code> - Send the quote to the client via email</li>
        <li><code>Quote to Invoice</code> - Convert the quote to an invoice</li>
        <li><code>Copy Quote</code> - Create a copy of the quote</li>
        <li><code>Delete</code> - Delete the quote</li>
    </ul>

    <h4 id="add-products">
        Adding Products <?php IP::headlineLink('/en/1.0/modules/quotes#add-products'); ?>
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
        Changing Item Order <?php IP::headlineLink('/en/1.0/modules/quotes#item-order'); ?>
    </h4>

    <p>The order in which an item appears on a quote or invoice can be changed by dragging the row to a new position
        with the <code><i class="fa fa-bars"></i></code> icon.</p>

    <h4 id="discounts">
        Discounts <?php IP::headlineLink('/en/1.0/modules/invoices#discounts'); ?>
    </h4>

    <p>With the release of InvoicePlane 1.4.0 we introduced discounts for each quotes and invoices. There are two separate types of discounts which can by applied:</p>

    <ul>
        <li>Item Discounts</li>
        <li>Quote Discounts</li>
    </ul>

    <h5>Item Discounts</h5>

    <p>Item discounts can be added for each item itself as an amount that will be subtract from the item subtotal. Item discounts can only be added as an amount, not as an percentage.</p>

    <h5>Quote Discounts</h5>

    <p>Quote discounts can be added for the whole quote directly above the quote total. You can either choose to add a discount as an amount (e.g. 200 $) or as a percentage of the subtotal (e.g. 5%).</p>

    <h4 id="add-tax">
        Add Tax to Quote <?php IP::headlineLink('/en/1.0/modules/quotes#add-tax'); ?>
    </h4>

    <p>To apply a tax against the entire quote, choose <code>Add Quote Tax</code> from the <code>Options</code> button.
        Choose the appropriate tax rate and placement from the window that appears and press the <code class="green">Submit</code>
        button. That tax will be calculated against the quote total.</p>

    <div class="alert alert-warning">
        Caution! Do not mix item and quote taxes. Both tax methods were implemented for countries with different law structures and do not work together very well. If you use both tax method at the same time we can't promise that all calculations are executed correctly.
        <br>
        Also, do <b>not</b> use item taxes to apply any service charges or similar extra charges. If you need to apply charges, add a new item or calculate the charges manually.
    </div>

    <h4 id="copy-quote">
        Copying the Quote <?php IP::headlineLink('/en/1.0/modules/quotes#copy-quote'); ?>
    </h4>

    <p>To copy a quote, choose <code>Copy Quote</code> from the <code>Options</code> button on the edit quote page.
        Change the client name, if appropriate, and then select the quote date and quote group and submit the form. All
        items, taxes and amounts from the source quote will be copied to a new quote.</p>

    <h4 id="quote-to-invoice">
        Generate Invoice from Quote <?php IP::headlineLink('/en/1.0/modules/quotes#quote-to-invoice'); ?>
    </h4>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_quotes_quote_to_invoice.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_quotes_quote_to_invoice.jpg">
        </a>
    </p>

    <p>When a client accepts a quote, you can convert that quote to an invoice by using the <code>Quote to
            Invoice</code> menu item from the <code>Options</code> button. Choose the invoice date and invoice group and
        press the <code class="green">Submit</code> button. The items from the quote will be copied over to your new
        invoice.</p>


    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/modules/clients',
                    'title' => 'Clients',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/modules/invoices',
                    'title' => 'Invoices',
                    'type' => 'article'
            )
    );
    ?>

@stop