@extends('layouts.master')

@section('title')
    Payments
@endsection

@section('content')

    <h2 class="page-title">Payments</h2>

    <h3 id="view">
        View Payments <?= IP::headlineLink('/en/1.0/modules/payments#view'); ?>
    </h3>

    <p>To view the payment list, click <code>Payments</code> from the main menu and select <code>View Payments</code>.
    </p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_payments.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_payments.jpg">
        </a>
    </p>

    <p>To navigate between pages, use the pager buttons located on the submenu bar.</p>

    <h3 id="add">
        Entering a Payment <?= IP::headlineLink('/en/1.0/modules/payments#add'); ?>
    </h3>

    <p>To enter a payment, either choose <code>Payments</code> from the main menu and select <code>Enter Payment</code>,
        or from the payment list, click the <code>New</code> button near the top right of the page.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_payments_form.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_payments_form.jpg">
        </a>
    </p>

    <p>When entering a payment, first select the invoice to enter the payment for. This will default the invoice amount
        into the Amount field. Adjust the date and amount, if necessary, and optionally select the payment method and
        enter any pertinent notes and press the <code>Save</code> button near the top right of the page.</p>

    <h3 id="online">
        Online Payments <?= IP::headlineLink('/en/1.0/modules/payments#online'); ?>
    </h3>

    <p>InvoicePlane can be configured to allow clients to make payments online. The only payment gateway currently
        tested with InvoicePlane is PayPal.</p>

    <h4 id="paypal">
        Configure PayPal for Online Payments <?= IP::headlineLink('/en/1.0/modules/payments#paypal'); ?>
    </h4>

    <p>To configure InvoicePlane integration with PayPal, you must first have valid PayPal API credentials. If you
        don't, follow <a href="https://developer.paypal.com/docs/classic/api/apiCredentials/" class="ext">these
            instructions</a> first to obtain the credentials.</p>

    <p>Once you have your API credentials, perform the following in InvoicePlane:</p>

    <ol>
        <li>Click the <code>Settings</code> icon and choose the <code>System Settings</code> entry.</li>
        <li>Click the <code>Merchant Account</code> tab.</li>
        <li>Set <code>Enable Online Payments</code> to <code>Yes</code>.</li>
        <li>Choose the appropriate <code>Merchant Driver</code>.</li>
        <li>Set the <code>Test Mode</code> to <code>No</code>.</li>
        <li>Enter the username, password and signature obtained from PayPal.</li>
        <li>Select the appropriate currency code.</li>
        <li>Press the <code>Save</code> button.</li>
    </ol>

    <p>Once configured, send your client the <code>Guest URL</code> (found at the bottom of the Invoice Edit screen) and
        they will be able to pay their invoice from the link. Optionally, you can also create a Guest User account in
        which the client can log into and view and pay their invoices.</p>


    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/modules/recurring-invoices',
                    'title' => 'Recurring Invoices',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/settings',
                    'title' => 'Settings',
                    'type' => 'section'
            )
    );
    ?>

@stop
