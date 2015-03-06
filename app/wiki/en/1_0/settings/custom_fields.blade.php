@extends('layouts.master')

@section('content')

<h2>Custom Fields</h2>

<p>Custom fields can be created to store information which InvoicePlane doesn\'t provide fields for. Custom fields can be created for:</p>

<ul>
    <li>Clients</li>
    <li>Quotes</li>
    <li>Invoices</li>
    <li>Payments</li>
    <li>User Accounts</li>
</ul>

<p>
    <a href="//invoiceplane.com/content/screenshots/web/ip_custom_fields.jpg" class="thumbnail" data-lightbox="image-1">
        <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_custom_fields.jpg">
    </a>
</p>

<h3 id="add">
    Adding a Custom Field <?php IP::headlineLink('/en/1.0/settings/custom-fields#add'); ?>
</h3>

<p>To add a new custom field click on the settings icon <code><i class="fa fa-cogs"></i></code> in the menubar and then choose <code>Custom Fields</code>. On the overview click on <code>New</code> in the top right.</p>

<p>
    <a href="//invoiceplane.com/content/screenshots/web/ip_custom_fields_form.jpg" class="thumbnail" data-lightbox="image-1">
        <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_custom_fields_form.jpg">
    </a>
</p>

<p>When adding custom fields, it is recommended to only use alpha and numeric characters for the label name. Once a custom field has been added to an object, the custom field will display at the bottom of the form for that object (so a custom field created for the client object will appear on the client form).</p>

<h3 id="add-to-template">
    Adding Custom Fields to Invoice Templates <?php IP::headlineLink('/en/1.0/settings/custom-fields#add-to-template'); ?>
</h3>

Simply creating the custom field won't place it on our invoice. We still need to modify the invoice template to do so.

To output this value to an invoice, take note of the Column value (in this case it's <code>client_custom_tax_id_number</code>). Edit an invoice template and add the following line where you'd like it to display:
<pre>
&lt;?php echo $invoice->client_custom_tax_id_number; ?&gt;
</pre>


Now any time an invoice is generated using the template you modified, the custom field will display along with the value you entered for that client.

This same procedure is used for adding custom fields to any of the other available objects and for adding those fields to our invoices.

<?php
$article_pagination = array(
        'previous' => array(
                'url' => '/en/1.0/settings/updatecheck',
                'title' => 'Updatecheck',
                'type' => 'article'
        ),
        'next' => array(
                'url' => '/en/1.0/settings/email-templates',
                'title' => 'Email Templates',
                'type' => 'article'
        )
);
?>

@stop