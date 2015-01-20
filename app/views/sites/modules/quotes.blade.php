@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.quotes') ?></h2>

<h3><?php echo trans('modules.quotes.lifecycle') ?></h3>

<p><?php echo trans('modules.quotes.lifecycle.text') ?></p>

<ul>
    <li><?php echo trans('modules.quotes.lifecycle.status.draft') ?></li>
    <li><?php echo trans('modules.quotes.lifecycle.status.sent') ?></li>
    <li><?php echo trans('modules.quotes.lifecycle.status.viewed') ?></li>
    <li><?php echo trans('modules.quotes.lifecycle.status.approved') ?></li>
    <li><?php echo trans('modules.quotes.lifecycle.status.rejected') ?></li>
    <li><?php echo trans('modules.quotes.lifecycle.status.canceled') ?></li>
</ul>

<h3><?php echo trans('modules.quotes.view_quotes') ?></h3>

<p><?php echo trans('modules.quotes.view_quotes.text.1') ?></p>

<p>
<a href="/content/screenshots/ip_quotes.jpg" rel="lightbox">
    <img src="/content/screenshots/ip_quotes.jpg">
</a>
</p>

<p><?php echo trans('modules.quotes.view_quotes.text.2') ?></p>

<p><?php echo trans('modules.quotes.view_quotes.options') ?></p>

<ul>
    <li><?php echo trans('modules.quotes.view_quotes.options.1') ?></li>
    <li><?php echo trans('modules.quotes.view_quotes.options.2') ?></li>
    <li><?php echo trans('modules.quotes.view_quotes.options.3') ?></li>
    <li><?php echo trans('modules.quotes.view_quotes.options.4') ?></li>
</ul>

<h3><?php echo trans('modules.quotes.create_quote') ?></h3>

<p><?php echo trans('modules.quotes.create_quote.text.1') ?></p>

<p>
    <a href="/content/screenshots/ip_modal_new_quote.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_modal_new_quote.jpg">
    </a>
</p>

<p><?php echo trans('modules.quotes.create_quote.text.2') ?></p>

<p>
    <a href="/content/screenshots/ip_quotes_add.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_quotes_add.jpg">
    </a>
</p>

<p><?php echo trans('modules.quotes.create_quote.text.3') ?></p>

<p><?php echo trans('modules.quotes.view_quotes.options') ?></p>

<ul>
    <li><?php echo trans('modules.quotes.view_quotes.options.1') ?></li>
    <li><?php echo trans('modules.quotes.view_quotes.options.2') ?></li>
    <li><?php echo trans('modules.quotes.view_quotes.options.3') ?></li>
    <li><?php echo trans('modules.quotes.view_quotes.options.4') ?></li>
</ul>


<h4><?php echo trans('modules.quotes.create_quote.add_items') ?></h4>

<p><?php echo trans('modules.quotes.create_quote.add_items.text.1') ?></p>

<p><?php echo trans('modules.quotes.create_quote.add_items.text.2') ?></p>

<p>
    <a href="/content/screenshots/ip_modal_itemlookup.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_modal_itemlookup.jpg">
    </a>
</p>

<p><?php echo trans('modules.quotes.create_quote.add_items.text.3') ?></p>


<h4><?php echo trans('modules.quotes.create_quote.change_order') ?></h4>

<p><?php echo trans('modules.quotes.create_quote.change_order.text') ?></p>


<h4><?php echo trans('modules.quotes.create_quote.add_tax') ?></h4>

<p><?php echo trans('modules.quotes.create_quote.add_tax.text') ?></p>


<h4><?php echo trans('modules.quotes.create_quote.copy_quote') ?></h4>

<p><?php echo trans('modules.quotes.create_quote.copy_quote.text') ?></p>


<h4><?php echo trans('modules.quotes.create_quote.quote_to_invoice') ?></h4>

<p>
    <a href="/content/screenshots/ip_modal_quote_to_invoice.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_modal_quote_to_invoice.jpg">
    </a>
</p>

<p><?php echo trans('modules.quotes.create_quote.quote_to_invoice.text') ?></p>


<?php
$article_pagination = array(
    'previous' => array(
        'url' => '/modules/clients',
        'title' => 'global.clients',
        'type' => 'article'
    ),
    'next' => array(
        'url' => '/modules/invoices',
        'title' => 'global.invoices',
        'type' => 'article'
    )
);
?>

@stop