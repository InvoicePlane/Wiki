@extends('layouts.master')

@section('title')
    Quickstart
@endsection

@section('content')

    <h2 class="page-title">Quickstart</h2>

    <h3 id="login">
        Logging In <?= IP::headlineLink('/en/1.5/getting-started/quickstart#login'); ?>
    </h3>

    <p>
        If InvoicePlane was installed into the root of your web server:
        <br/>
        <code>http://www.your-domain.com</code>
    </p>

    <p>
        If InvoicePlane was installed into its own subdirectory of your web server:
        <br/>
        <code>http://www.your-domain.com/the-subdirectory</code>
    </p>

    <hr/>

    <h3 id="config">
        Configure the Application <?= IP::headlineLink('/en/1.5/getting-started/quickstart#config'); ?>
    </h3>

    <p>
        Before you start with invoicing you should check the application settings on <code>http://www.your-domain.com/settings</code>
        and set for example the currency, how the amounts should be formatted and so on.
    </p>

    <p>
        More information about available settings can be found on the <a href="{{ url('en/1.5/modules/settings') }}">Settings</a>
        page.
    </p>

    <hr/>

    <h3 id="add-client">
        Adding a Client <?= IP::headlineLink('/en/1.5/getting-started/quickstart#add-client'); ?>
    </h3>

    <p>
        Click <code>Clients</code> from the main menu at the top of the page and select <code>Add Client</code>. Fill in
        as much information as needed and submit the form.
    </p>

    <p>
        More information about the client management can be found on the <a href="{{ url('en/1.5/modules/clients') }}">Clients</a>
        page.
    </p>

    <hr/>

    <h3 id="add-products">
        Adding Products <?= IP::headlineLink('/en/1.5/getting-started/quickstart#add-products'); ?>
    </h3>

    <p>
        If you have products which should appear on your invoices or quotes you can create them form the
        <code>Products</code> menu.
    </p>

    <p>
        More information about products can be found on the <a href="{{ url('en/1.5/modules/products') }}">Products</a>
        page.
    </p>

    <hr/>

    <h3 id="create-invoice">
        Creating an Invoice <?= IP::headlineLink('/en/1.5/getting-started/quickstart#create-invoice'); ?>
    </h3>

    <p>
        Click <code>Invoices</code> from the main menu at the top of the page and select <code>Create Invoice</code>.
        Start typing the client name into the <code>Client</code> box. If the client already exists in InvoicePlane,
        select the client from the list which appears after you start typing. If the client does not already exist in
        InvoicePlane, continue typing the client\'s name and that client will be added as a new record.<br/>
        Then choose the invoice date and invoice group and submit the form.
    </p>
    <p>
        If you added some products before you can simply add them via the <code>Add Product</code> button left from the
        <code class="green">Save</code> button. If you want to enter some items manually you can use the empty row or
        add new rows with the <code>Add new Row</code> button.
    </p>

    <h4 id="create-invoice">
        Send the invoice <?= IP::headlineLink('/en/1.5/getting-started/quickstart#send-invoice'); ?>
    </h4>

    <p>
        If viewing a list of invoices, click the <code>Options</code> button on the row of the invoice to send. If
        viewing a single invoice, click the Options button near the top right of the page. Select <code>Send
            Email</code> from the <code>Options</code> button, review the information and submit the form. The client
        will receive an email with the invoice attached as a PDF.
    </p>

    <hr/>

    <h3 id="enter-payment">
        Entering a Payment <?= IP::headlineLink('/en/1.5/getting-started/quickstart#enter-payment'); ?>
    </h3>

    <p>
        Offline payments are entered by clicking <code>Payments</code> from the main menu at the top of the page and
        selecting <code>Enter Payment</code>. Fill in the appropriate information and submit the form to enter the
        payment.
    </p>
    <p>
        Online payments allow a client to pay their invoice online. When an online payment occurs, the payment is
        automatically entered back into InvoicePlane, eliminating the need to manually enter an offline payment. Online
        payments require additional setup before they can be used.
    </p>

    <p>
        More information about payments can be found on the <a href="{{ url('en/1.5/modules/payments') }}">Payments</a>
        page.
    </p>

    <?php
    $article_pagination = array(
        'previous' => array(
            'url' => '/en/1.5/getting-started/installation',
            'title' => 'Installation',
            'type' => 'article'
        ),
        'next' => array(
            'url' => '/en/1.5/getting-started/updating-ip',
            'title' => 'Updating InvoicePlane',
            'type' => 'article'
        )
    );
    ?>

@stop
