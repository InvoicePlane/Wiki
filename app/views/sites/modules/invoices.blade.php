@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.invoices') ?></h2>

<h3><?php echo trans('modules.invoices.lifecycle') ?></h3>

<p><?php echo trans('modules.invoices.lifecycle.text') ?></p>

<ul>
    <li><?php echo trans('modules.invoices.lifecycle.status.draft') ?></li>
    <li><?php echo trans('modules.invoices.lifecycle.status.sent') ?></li>
    <li><?php echo trans('modules.invoices.lifecycle.status.viewed') ?></li>
    <li><?php echo trans('modules.invoices.lifecycle.status.paid') ?></li>
    <li><?php echo trans('modules.invoices.lifecycle.status.overdue') ?></li>
</ul>


<h3><?php echo trans('modules.invoices.create_invoice') ?></h3>

<p><?php echo trans('modules.invoices.create_invoice.text.1') ?></p>

<p>
    <a href="/content/screenshots/ip_invoices.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_invoices.jpg">
    </a>
</p>

<p><?php echo trans('modules.invoices.create_invoice.text.2') ?></p>

<p>
    <a href="/content/screenshots/ip_invoices_add.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_invoices_add.jpg">
    </a>
</p>

<p><?php echo trans('modules.invoices.create_invoice.text.3') ?></p>

<p>
    <a href="/content/screenshots/ip_invoices.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_invoices.jpg">
    </a>
</p>

<p><?php echo trans('modules.invoices.create_invoice.options') ?></p>

<ul>
    <li><?php echo trans('modules.invoices.create_invoice.options.1') ?></li>
    <li><?php echo trans('modules.invoices.create_invoice.options.2') ?></li>
    <li><?php echo trans('modules.invoices.create_invoice.options.3') ?></li>
    <li><?php echo trans('modules.invoices.create_invoice.options.4') ?></li>
    <li><?php echo trans('modules.invoices.create_invoice.options.5') ?></li>
    <li><?php echo trans('modules.invoices.create_invoice.options.6') ?></li>
    <li><?php echo trans('modules.invoices.create_invoice.options.7') ?></li>
</ul>


<h3><?php echo trans('modules.invoices.add_items') ?></h3>

<p><?php echo trans('modules.invoices.add_items.text.1') ?></p>

<p><?php echo trans('modules.invoices.add_items.text.2') ?></p>

<p>
    <a href="/content/screenshots/ip_modal_itemlookup.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_modal_itemlookup.jpg">
    </a>
</p>

<p><?php echo trans('modules.invoices.add_items.text.3') ?></p>


<h3><?php echo trans('modules.invoices.item_order') ?></h3>

<p><?php echo trans('modules.invoices.item_order.text') ?></p>


<h3><?php echo trans('modules.invoices.add_tax') ?></h3>

<p><?php echo trans('modules.invoices.add_tax.text') ?></p>


<h3><?php echo trans('modules.invoices.copy_invoice') ?></h3>

<p><?php echo trans('modules.invoices.copy_invoice.text') ?></p>


<?php
$article_pagination = array(
    'previous' => array(
        'url' => '/modules/quotes',
        'title' => 'global.quotes',
        'type' => 'article'
    ),
    'next' => array(
        'url' => '/modules/recurring-invoices',
        'title' => 'global.recurring_invoices',
        'type' => 'article'
    )
);
?>

@stop