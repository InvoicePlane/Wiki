@extends('layouts.master')

@section('content')

    <h2 class="page-title">Importing Data</h2>

    <p>InvoicePlane can import data from any system as long as it is provided in comma delimited CSV format and is
        structured according to the details below. The data import tool can be accessed by clicking the Settings icon
        and choosing the Import Data item.</p>

    <p>The import tool assumes the following:</p>

    <p>The file names will be exactly as they are listed below.<br/>
        All of the columns listed below must be present in the files, even if there is no data in the column.<br/>
        The first row of each file must contain the file headings, and those headings must be named exactly as they are
        listed below.<br/>
        The files must all be in comma delimited CSV format.<br/>
        The files to import must be located in your uploads/import folder.<br/>
        The email address in the invoice file must be an email address of an actual user account currently in
        InvoicePlane.<br/>
        If any of the rules above are not met, the import will not work as expected.</p>

    <p><b>File names and columns</b></p>

    <ul>
        <li>
            clients.csv
            <ul>
                <li>client_name</li>
                <li>client_address_1</li>
                <li>client_address_2</li>
                <li>client_city</li>
                <li>client_state</li>
                <li>client_zip</li>
                <li>client_country</li>
                <li>client_phone</li>
                <li>client_fax</li>
                <li>client_mobile</li>
                <li>client_email</li>
                <li>client_web</li>
                <li>client_active (1 for active, 0 for inactive)</li>
            </ul>
        </li>
        <li>
            invoices.csv
            <ul>
                <li>user_email</li>
                <li>client_name</li>
                <li>invoice_date_created (yyyy-mm-dd format)</li>
                <li>invoice_date_due (yyyy-mm-dd format)</li>
                <li>invoice_number</li>
                <li>invoice_terms</li>
            </ul>
        </li>
        <li>
            invoice_items.csv
            <ul>
                <li>invoice_number</li>
                <li>item_tax_rate (ex: 7.8 would indicate 7.8%)</li>
                <li>item_date_added (yyyy-mm-dd format)</li>
                <li>item_name</li>
                <li>item_description</li>
                <li>item_quantity</li>
                <li>item_price (without any currency symbols)</li>
            </ul>
        </li>
        <li>
            payments.csv
            <ul>
                <li>invoice_number</li>
                <li>payment_method (ex: Cash, Credit or PayPal)</li>
                <li>payment_date (yyyy-mm-dd format)</li>
                <li>payment_amount (without any currency symbols)</li>
                <li>payment_note</li>
            </ul>
        </li>
    </ul>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/system/translation-localization',
                    'title' => 'Translation / Localization',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/system/upgrade-from-fusioninvoice',
                    'title' => 'Upgrade form FusionInvoice',
                    'type' => 'article'
            )
    );
    ?>

@stop