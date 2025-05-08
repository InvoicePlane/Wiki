@extends('layouts.master')

@section('title')
    User Accounts
@endsection

@section('content')

    <h2 class="page-title">User Accounts</h2>

    <p>InvoicePlane can contain an unlimited number of user accounts (both Administrator and Guest), but there is no
        real level of ownership or separation between different administrator accounts. Each administrator account has
        full access to the entire system and can see all data system-wide. Guest accounts are read-only and can be
        restricted to see invoices, quotes and payments for the client or clients you specify.</p>

    <h3 id="types">
        User Types <?= IP::headlineLink('/en/1.5/settings/user-accounts#types'); ?>
    </h3>

    <p><b>Administrator</b></p>

    <p>An administrator account has full access to the entire system. Administrators can create and delete clients,
        invoices, payments, users, and everything else in the system. The account created during installation is an
        administrator account. If you don't want somebody having full access to all of your data, do not create an
        administrator account for them.</p>

    <p><b>Guest (Read Only)</b></p>

    <p>There may be times where you need to allow a user into your system, but with limited access. Guest accounts allow
        you to create a user account which can only view quotes, invoices and payments for one or more clients. A guest
        account may be created for a particular client, in which case you would create the account and grant access to
        only that client. A guest account may also be created for an accountant, in which case you might create the
        account and grant access to more than just one client.</p>

    ###
    <h3 id="view">
        Viewing Users <?= IP::headlineLink('/en/1.5/settings/user-accounts#view'); ?>
    </h3>

    <p>To view the user list, click the settings icon <code><i class="fa fa-cogs"></i></code> near the right hand side
        of the main menu and select <code>User Accounts</code>.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_useraccounts.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_useraccounts.jpg">
        </a>
    </p>

    <p>To navigate between pages, use the pager buttons located on the submenu bar.</p>

    <p>The <code>Options</code> button at the end of each row displays a menu from which you can edit or delete an user.
    </p>

    <h3 id="add">
        Add an User Account <?= IP::headlineLink('/en/1.5/settings/user-accounts#add'); ?>
    </h3>

    <p>To add a new user account, click the settings icon <code><i class="fa fa-cogs"></i></code> near the right hand
        side of the main menu, select <code>User Accounts</code>, and click the <code>New</code> button near the top
        right of the page.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_useraccounts_form.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_useraccounts_form.jpg">
        </a>
    </p>

    <p>To create the user account, provide the user's name (typically their full name), email address (this is what
        they'll use to log in with), password and password verification. When selecting the user type, choose between
        <code>Administrator</code> or <code>Guest</code>. Once the user type has been selected, the rest of the form
        will display below the initial form.</p>

    <p>If <code>Administrator</code> was selected as the user type, several fields will be made available to complete,
        such as their address and location information and contact information. Fill in the fields and press the <code
                class="green">Save</code> button near the top right of the page.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_useraccounts_form.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_useraccounts_form.jpg">
        </a>
    </p>

    <p>If <code>Guest</code> was selected as the user type, an area will be made available from which you can give
        access to one or more clients for the <code>Guest</code> user account. To provide access to a single client,
        press the <code>Add Client</code> button, begin typing the name of the client in to the form and select the
        client when they appear in the list. Press the <code class="green">Submit</code> button. If you want you can add
        another client to the user account. If not press <code class="red">Cancel</code>. Don't forget to save the user
        account.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_useraccounts_add_client.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_useraccounts_add_client.jpg">
        </a>
    </p>

    <p>If a guest account is not a client, but instead an accountant, you will probably want to provide them with access
        to more than just a single client. In that case, press the <code>Add Client</code> button, begin typing the name
        of the first client in to the form and select the client when they appear in the list. Press the <code
                class="green">Submit</code> button and begin typing the next client name. Rinse, wash and repeat until
        each client the guest should have access to has been added to the list. Press the Close button and then press
        the <code class="green">Save</code> button near the top of the page when finished.</p>

    <p>No matter if the account is an Administrator account or a Guest account, all users use the same URL to log in. Be
        sure and provide your login URL to any users who you create accounts for.</p>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.5/settings/taxrates',
                    'title' => 'Taxrates',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.5/templates',
                    'title' => 'Templates',
                    'type' => 'section'
            )
    );
    ?>

@stop
