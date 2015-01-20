@extends('layouts.master')

@section('content')

<h1><?php echo trans('global.site_title') ?></h1>

<div class="alert alert-info">
    <?php echo trans('content.home.welcome_message') ?>
</div>

<h2><?php echo trans('global.about_ip') ?></h2>

<ul>
    <li><a href="/about"><?php echo trans('global.about_ip') ?></a></li>
    <li><a href="/updates"><?php echo trans('global.updates') ?></a></li>
    <li><a href="/changelog"><?php echo trans('global.changelog') ?></a></li>
    <li><a href="/license"><?php echo trans('global.license') ?></a></li>
</ul>

<h2><?php echo trans('global.getting_started') ?></h2>

<ul>
    <li><a href="/getting-started/requirements"><?php echo trans('global.requirements') ?></a></li>
    <li><a href="/getting-started/installation"><?php echo trans('global.installation') ?></a></li>
    <li><a href="/getting-started/quickstart"><?php echo trans('global.quickstart') ?></a></li>
    <li><a href="/getting-started/move-from-fusioninvoice"><?php echo trans('global.move_from_fi') ?></a></li>
</ul>

<h2><?php echo trans('global.modules') ?></h2>

<ul>
    <li><a href="/modules/clients"><?php echo trans('global.clients') ?></a></li>
    <li><a href="/modules/quotes"><?php echo trans('global.quotes') ?></a></li>
    <li><a href="/modules/invoices"><?php echo trans('global.invoices') ?></a></li>
    <li><a href="/modules/recurring-invoices"><?php echo trans('global.recurring_invoices') ?></a></li>
    <li><a href="/modules/payments"><?php echo trans('global.payments') ?></a></li>
</ul>

<h2><?php echo trans('global.settings') ?></h2>

<ul>
    <li><a href="/settings/general"><?php echo trans('global.general_settings') ?></a></li>
    <li><a href="/settings/quotes"><?php echo trans('global.quotes') ?></a></li>
    <li><a href="/settings/invoices"><?php echo trans('global.invoices') ?></a></li>
    <li><a href="/settings/payments"><?php echo trans('global.payments') ?></a></li>
    <li><a href="/settings/taxrates"><?php echo trans('global.taxrates') ?></a></li>
    <li><a href="/settings/invoicegroups"><?php echo trans('global.invoicegroups') ?></a></li>
    <li><a href="/settings/translation-localization"><?php echo trans('global.translation_localization') ?></a></li>
    <li><a href="/settings/custom-fields"><?php echo trans('global.custom_fields') ?></a></li>
    <li><a href="/settings/user-accounts"><?php echo trans('global.user_accounts') ?></a></li>
    <li><a href="/settings/email-templates"><?php echo trans('global.email_templates') ?></a></li>
</ul>

<h2><?php echo trans('global.system') ?></h2>

<ul>
    <li><a href="/system/importing-data"><?php echo trans('global.importing_data') ?></a></li>
</ul>

@stop