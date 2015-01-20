@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.settings') ?></h2>

<ul>
    <li><a href="/settings/general"><?php echo trans('global.general_settings') ?></a></li>
    <li><a href="/settings/quotes"><?php echo trans('global.quote_settings') ?></a></li>
    <li><a href="/settings/invoices"><?php echo trans('global.invoice_settings') ?></a></li>
    <li><a href="/settings/payments"><?php echo trans('global.payment_settings') ?></a></li>
    <li><a href="/settings/taxrates"><?php echo trans('global.taxrates') ?></a></li>
    <li><a href="/settings/invoicegroups"><?php echo trans('global.invoicegroups') ?></a></li>
    <li><a href="/settings/translation-localization"><?php echo trans('global.translation_localization') ?></a></li>
    <li><a href="/settings/custom-fields"><?php echo trans('global.custom_fields') ?></a></li>
    <li><a href="/settings/user-accounts"><?php echo trans('global.user_accounts') ?></a></li>
    <li><a href="/settings/email-templates"><?php echo trans('global.email_templates') ?></a></li>
</ul>

@stop