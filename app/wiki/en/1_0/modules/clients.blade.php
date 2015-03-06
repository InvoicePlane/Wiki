@extends('layouts.master')

@section('content')

    <h2 class="page-title">Clients</h2>

    <h3 id="view-clients">
        View Clients <?php IP::headlineLink('/en/1.0/modules/clients#view-clients'); ?>
    </h3>

    <p>To view the client list, click <code>Clients</code> from the main menu and select <code>View Clients</code>.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_clients.jpg" class="thumbnail" data-lightbox="image-1">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_clients.jpg">
        </a>
    </p>

    <p>By default, the client list will be filtered to active clients only. The filter can be set to either
        <code>Active</code>, <code>Inactive</code> or <code>All</code> by choosing the filter from the submenu bar.<br/>
        To navigate between pages, use the pager buttons located on the submenu bar.</p>

    <p>The <code>Options</code> button at the end of each row displays a menu with a number of items when clicked:</p>

    <ul>
        <li><code>View</code> - View the client</li>
        <li><code>Edit</code> - Edit the client</li>
        <li><code>Create Quote</code> - Create a quote for the client</li>
        <li><code>Create Invoice</code> - Create an invoice for the client</li>
        <li><code>Delete</code> - Delete the client</li>
    </ul>

    <h3 id="add-clients">
        Add new Clients <?php IP::headlineLink('/en/1.0/modules/clients#add-clients'); ?>
    </h3>

    <p>To add a new client, either choose <code>Clients</code> from the main menu and select <code>Add Client</code>, or
        from the client list, click the <code>New</code> button near the top right of the page.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_clients_add.jpg" class="thumbnail"
           data-lightbox="image-1">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_clients_add.jpg">
        </a>
    </p>

    <p>When adding a new client, the only field required is the <code>Client Name</code> field, although if you plan to
        email invoices and quotes to your clients, the <code>Email Address</code> field should be filled in as well. Any
        <a href="/en/1.0/settings/custom-fields">custom fields</a> created for client records will display at the bottom
        of the client form.</p>

    <h3 id="client-login">
        Client Logins <?php IP::headlineLink('/en/1.0/modules/clients#client-login'); ?>
    </h3>

    <p>Clients can be granted permission to log into InvoicePlane to view their quotes and invoices, approve or reject
        quotes and pay their invoices. See the <code>Guest Account</code> section of the <a
                href="/en/1.0/settings/user-accounts">User Accounts</a> page for instructions on creating logins for
        your clients.</p>


    <?php
    $article_pagination = array(
            'next' => array(
                    'url' => '/en/1.0/modules/quotes',
                    'title' => 'Quotes',
                    'type' => 'article'
            )
    );
    ?>

@stop