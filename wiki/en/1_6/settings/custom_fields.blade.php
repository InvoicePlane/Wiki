@extends('layouts.master')

@section('title')
    Custom Fields
@endsection

@section('content')

    <h2 class="page-title">Custom Fields</h2>

    <p>Custom fields can be created to store information which InvoicePlane doesn\'t provide fields for. Custom fields
        can be created for:</p>

    <ul>
        <li>Clients</li>
        <li>Quotes</li>
        <li>Invoices</li>
        <li>Payments</li>
        <li>User Accounts</li>
    </ul>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_custom_fields.jpg" class="thumbnail"
           data-lightbox="image-1">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_custom_fields.jpg">
        </a>
    </p>

    <h3 id="add">
        Adding a Custom Field <?= IP::headlineLink('/en/1.5/settings/custom-fields#add'); ?>
    </h3>

    <p>To add a new custom field click on the settings icon <code><i class="fa fa-cogs"></i></code> in the menubar and
        then choose <code>Custom Fields</code>. On the overview click on <code>New</code> in the top right.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_custom_fields_form.jpg" class="thumbnail"
           data-lightbox="image-1">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_custom_fields_form.jpg">
        </a>
    </p>

    <p>When adding custom fields, it is recommended to only use alpha and numeric characters for the label name. Once a
        custom field has been added to an object, the custom field will display at the bottom of the form for that
        object (so a custom field created for the client object will appear on the client form).</p>

    <h3 id="add-to-template">
        Adding Custom Fields to Templates <?= IP::headlineLink('/en/1.5/settings/custom-fields#add-to-template'); ?>
    </h3>

    <p>
        Please take a look at the <a href="/en/1.5/templates/customize-templates#custom-fields">Customize Templates
            page</a> for more information about custom fields in templates.
    </p>

    <?php
    $article_pagination = array(
        'previous' => array(
            'url' => '/en/1.5/settings/updatecheck',
            'title' => 'Updatecheck',
            'type' => 'article'
        ),
        'next' => array(
            'url' => '/en/1.5/settings/email-templates',
            'title' => 'Email Templates',
            'type' => 'article'
        )
    );
    ?>

@stop
