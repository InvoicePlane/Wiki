@extends('layouts.master')

@section('title')
    Invoice Groups
@endsection

@section('content')

    <h2 class="page-title">Invoice Groups</h2>

    <p>When a new invoice or quote is created, InvoicePlane uses invoice groups to determine the next invoice or quote number and how it should be structured. InvoicePlane comes with two default invoice groups - Invoice Default and Quote Default. Both groups will generate simple incremental ID's starting at the number 1, but the Quote Default will be prefixed with "QUO".</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_invoice_groups.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_invoice_groups.jpg">
        </a>
    </p>

    <h3 id="configure">
        Configure an Invoice Group <?php IP::headlineLink('/en/1.0/settings/invoice-groups#configure'); ?>
    </h3>

    <p>These default groups can be customized and any number of new groups can be created. Each group has a number of options.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_invoice_groups_form.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_invoice_groups_form.jpg">
        </a>
    </p>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <th>Setting</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Name</td>
                <td>The name if the invoice group that will be used in the settings</td>
            </tr>
            <tr>
                <td>Identifier formatting</td>
                <td>The identifier is used to generate invoices or quotes and can consist of alpha-numeric characters</td>
            </tr>
            <tr>
                <td>Next ID</td>
                <td>Set the ID for the next invoice. Please notice that you should not set the next ID to a number below the ID of the last generated ID.<br/>
                Example: You created 59 invoices but you want the next invoice to have the ID 100 so set the Next ID to 100.</td>
            </tr>
            <tr>
                <td>Left Pad</td>
                <td>The left padding can be used to generate IDs that contain zeros to the left of the ID. The left padding contains the invoice ID itself.<br/>
                Example: you set the left padding to 5 which would lead to invoice IDs like 00056 or 00397.</td>
            </tr>
        </table>
    </div>

    <h4 id="prefix">
        Format the Identifier <?php IP::headlineLink('/en/1.0/settings/invoice-groups#identifier'); ?>
    </h4>

    <div class="alert alert-warning">Caution! The identifier <b>must</b> contain the <code>&#123;&#123;&#123;ID&#125;&#125;&#125;</code> tag no matter where!</div>

    <p>There are some template tags that can be used to create a custom identifier.</p>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <th>Name</th>
                <th>Tag</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>ID</td>
                <td><code>&#123;&#123;&#123;ID&#125;&#125;&#125;</code></td>
                <td>Inserts the increasing ID of the invoice</td>
            </tr>
            <tr>
                <td>Current Year</td>
                <td><code>&#123;&#123;&#123;year&#125;&#125;&#125;</code></td>
                <td>Inserts the current year with 4 digits</td>
            </tr>
            <tr>
                <td>Current month</td>
                <td><code>&#123;&#123;&#123;month&#125;&#125;&#125;</code></td>
                <td>Inserts the current month with 2 digits</td>
            </tr>
            <tr>
                <td>Current day</td>
                <td><code>&#123;&#123;&#123;day&#125;&#125;&#125;</code></td>
                <td>Inserts the current day with 2 digits</td>
            </tr>
        </table>
    </div>

    <h4 id="examples">
        Formatting Examples <?php IP::headlineLink('/en/1.0/settings/invoice-groups#examples'); ?>
    </h4>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <th>Template</th>
                <th>Output</th>
            </tr>
            <tr>
                <td><code>&#123;&#123;&#123;year&#125;&#125;&#125;/&#123;&#123;&#123;ID&#125;&#125;&#125;</code></td>
                <td>{{ date('Y') }}/456</td>
            </tr>
            <tr>
                <td><code>&#123;&#123;&#123;year&#125;&#125;&#125;_&#123;&#123;&#123;month&#125;&#125;&#125;_&#123;&#123;&#123;ID&#125;&#125;&#125;</code></td>
                <td>{{ date('Y') }}_{{ date('m') }}_456</td>
            </tr>
            <tr>
                <td><code>&#123;&#123;&#123;year&#125;&#125;&#125;-&#123;&#123;&#123;month&#125;&#125;&#125;-&#123;&#123;&#123;day&#125;&#125;&#125;-&#123;&#123;&#123;ID&#125;&#125;&#125;</code></td>
                <td>{{ date('Y') }}-{{ date('m') }}-{{ date('d') }}-456</td>
            </tr>
            <tr>
                <td><code>IN&#123;&#123;&#123;year&#125;&#125;&#125;&#123;&#123;&#123;ID&#125;&#125;&#125;</code></td>
                <td>IN{{ date('Y') }}456</td>
            </tr>
            <tr>
                <td><code>IPQ-&#123;&#123;&#123;day&#125;&#125;&#125;&#123;&#123;&#123;ID&#125;&#125;&#125;</code></td>
                <td>IPQ-{{ date('d') }}456</td>
            </tr>
        </table>
    </div>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/settings/email-templates',
                    'title' => 'Email Templates',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/settings/payment-methods',
                    'title' => 'Payment Methods',
                    'type' => 'article'
            )
    );
    ?>

@stop