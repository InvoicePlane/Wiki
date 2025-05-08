@extends('layouts.master')

@section('title')
    Invoice Settings
@endsection

@section('content')

    <h2 class="page-title">Invoice Settings</h2>

    <p>On the invoice settings page you can set a lot of options to control how invoices should behave.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_settings_invoices.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_settings_invoices.jpg">
        </a>
    </p>

    <h3 id="general">
        General settings <?= IP::headlineLink('/en/1.5/settings/general#general'); ?>
    </h3>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <th>Setting</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Default Invoicegroup</td>
                <td>Select the <a href="{{ url('en/1.5/settings/invoice-groups') }}">Invoicegroup</a> that should be used by default</td>
            </tr>
            <tr>
                <td>Set the Invoice to read-only on</td>
                <td>Select on which state an invoice should be set to read-only</td>
            </tr>
            <tr>
                <td>Invoice due after</td>
                <td>Select after how many days an invoice should be set to due</td>
            </tr>
            <tr>
                <td>Default Terms</td>
                <td>You can enter the default terms for any invoice here</td>
            </tr>
            <tr>
                <td>Automatically email recurring invoices</td>
                <td>If you have recurring invoices you can choose if InvoicePlane should send an email with the invoice attached to the client automatically</td>
            </tr>
            <tr>
                <td>Mark Invoices as sent when PDF is generated</td>
                <td>Choose if InvoicePlane should set the status of an invoice to <code class="status-sent">Sent</code> when you download the PDF</td>
            </tr>
            <tr>
                <td>Invoice Logo</td>
                <td>Upload an image that should be placed on templates.</td>
            </tr>
        </table>
    </div>

    <h3 id="templates">
        Templates <?= IP::headlineLink('/en/1.5/settings/invoices#templates'); ?>
    </h3>

    <p>All following settings allow you to set default PDF and email templates for different states and purposes. At the end in the PDF Footer you can enter information that should be placed at the bottom of each PDF template.</p>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.5/settings/general',
                    'title' => 'General Settings',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.5/settings/quotes',
                    'title' => 'Quote Settings',
                    'type' => 'article'
            )
    );
    ?>

@stop
