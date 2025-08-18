@extends('layouts.master')

@section('title')
    Quote Settings
@endsection

@section('content')

    <h2 class="page-title">Quote Settings</h2>

    <p>The general settings page sets a lot of options that will change the look &amp; feel of the whole application or that are needed for some special purposes.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_settings_quotes.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_settings_quotes.jpg">
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
                <td>Quote expires after</td>
                <td>Choose after how many days a quote should be set to expired</td>
            </tr>
            <tr>
                <td>Default Quotegroup</td>
                <td>Select the <a href="{{ url('en/1.5/settings/invoice-groups') }}">Quotegroup (aka Invoicegroups)</a> that should be used by default</td>
            </tr>
            <tr>
                <td>Mark Quotes as sent when PDF is generated</td>
                <td>Choose if InvoicePlane should set the status of an quote to <code class="status-sent">Sent</code> when you download the PDF</td>
            </tr>
        </table>
    </div>

    <h3 id="templates">
        Templates <?= IP::headlineLink('/en/1.5/settings/invoices#templates'); ?>
    </h3>

    <p>All following settings allow you to set default PDF and email templates for different states and purposes.</p>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.5/settings/invoices',
                    'title' => 'Invoice Settings',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.5/settings/taxes',
                    'title' => 'Tax Settings',
                    'type' => 'article'
            )
    );
    ?>

@stop
