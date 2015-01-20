@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.custom_fields') ?></h2>

<p><?php echo trans('settings.custom_fields.intro') ?></p>

<ul>
    <li><?php echo trans('global.clients') ?></li>
    <li><?php echo trans('global.quotes') ?></li>
    <li><?php echo trans('global.invoices') ?></li>
    <li><?php echo trans('global.payments') ?></li>
    <li><?php echo trans('global.user_accounts') ?></li>
</ul>


<h3><?php echo trans('settings.custom_fields.create_field') ?></h3>

<p><?php echo trans('settings.custom_fields.create_field.text.1') ?></p>

<p><?php echo trans('settings.custom_fields.create_field.text.2') ?></p>

<p>[Screenshot coming soon]<br/>
The custom field form</p>

<p>[Screenshot coming soon]<br/>
The custom field record once created</p>

<p><?php echo trans('settings.custom_fields.create_field.text.3') ?></p>

<p>[Screenshot coming soon]<br/>
The client form with the new custom field</p>

### Adding Custom Fields to Invoice Templates

Simply creating the custom field won't place it on our invoice. We still need to modify the invoice template to do so.

To output this value to an invoice, take note of the Column value (in this case it's `client_custom_tax_id_number`). Edit an invoice template and add the following line where you'd like it to display:

Tax ID Number:
<pre>
&lt;?php echo $invoice->client_custom_tax_id_number; ?&gt;
</pre>


Now any time an invoice is generated using the template you modified, the custom field will display along with the value you entered for that client.

This same procedure is used for adding custom fields to any of the other available objects and for adding those fields to our invoices.

@stop