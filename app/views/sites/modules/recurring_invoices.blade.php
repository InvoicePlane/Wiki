@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.recurring_invoices') ?></h2>

<p><?php echo trans('modules.recurring_invoices.intro') ?></p>


<h3><?php echo trans('modules.recurring_invoices.requirements') ?></h3>

<p><?php echo trans('modules.recurring_invoices.requirements.text.1') ?></p>

<pre>http://your-domain.com/invoices/cron/recur/your-cron-key-here</pre>

<p><?php echo trans('modules.recurring_invoices.requirements.text.2') ?></p>


<h3><?php echo trans('modules.recurring_invoices.create_invoice') ?></h3>

<p><?php echo trans('modules.recurring_invoices.create_invoice.text.1') ?></p>

<p>
    <a href="/content/screenshots/ip_modal_recurring_invoice.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_modal_recurring_invoice.jpg">
    </a>
</p>

<p><?php echo trans('modules.recurring_invoices.create_invoice.text.2') ?></p>


<h3><?php echo trans('modules.recurring_invoices.view_invoices') ?></h3>

<p>
    <a href="/content/screenshots/ip_invoices_recurring.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_invoices_recurring.jpg">
    </a>
</p>

<p><?php echo trans('modules.recurring_invoices.view_invoices.text') ?></p>


<?php
$article_pagination = array(
    'previous' => array(
        'url' => '/modules/invoices',
        'title' => 'global.invoices',
        'type' => 'article'
    ),
    'next' => array(
        'url' => '/modules/payments',
        'title' => 'global.payments',
        'type' => 'article'
    )
);
?>

@stop