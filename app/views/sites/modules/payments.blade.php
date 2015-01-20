@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.payments') ?></h2>


<h3><?php echo trans('modules.payments.view_payments') ?></h3>

<p><?php echo trans('modules.payments.view_payments.text.1') ?></p>

<p>
    <a href="/content/screenshots/ip_payments.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_payments.jpg">
    </a>
</p>

<p><?php echo trans('modules.payments.view_payments.text.2') ?></p>


<h3><?php echo trans('modules.payments.enter_payments') ?></h3>

<p><?php echo trans('modules.payments.enter_payments.text.1') ?></p>

<p>
    <a href="/content/screenshots/ip_payments_add.jpg" rel="lightbox">
        <img src="/content/screenshots/ip_payments_add.jpg">
    </a>
</p>

<p><?php echo trans('modules.payments.enter_payments.text.2') ?></p>


<h3><?php echo trans('modules.payments.online_payments') ?></h3>

<p><?php echo trans('modules.payments.online_payments.text') ?></p>


<h4><?php echo trans('modules.payments.online_payments.configure_paypal') ?></h4>

<p><?php echo trans('modules.payments.online_payments.configure_paypal.text.1') ?></p>

<p><?php echo trans('modules.payments.online_payments.configure_paypal.steps') ?></p>

<ol>
    <li><?php echo trans('modules.payments.online_payments.configure_paypal.steps.1') ?></li>
    <li><?php echo trans('modules.payments.online_payments.configure_paypal.steps.2') ?></li>
    <li><?php echo trans('modules.payments.online_payments.configure_paypal.steps.3') ?></li>
    <li><?php echo trans('modules.payments.online_payments.configure_paypal.steps.4') ?></li>
    <li><?php echo trans('modules.payments.online_payments.configure_paypal.steps.5') ?></li>
    <li><?php echo trans('modules.payments.online_payments.configure_paypal.steps.6') ?></li>
    <li><?php echo trans('modules.payments.online_payments.configure_paypal.steps.7') ?></li>
    <li><?php echo trans('modules.payments.online_payments.configure_paypal.steps.8') ?></li>
</ol>

<p><?php echo trans('modules.payments.online_payments.configure_paypal.text.2') ?></p>


<?php
$article_pagination = array(
    'previous' => array(
        'url' => '/modules/recurring-invoices',
        'title' => 'global.recurring_invoices',
        'type' => 'article'
    ),
    'next' => array(
            'url' => '/settings',
            'title' => 'global.settings',
            'type' => 'section'
        )
);
?>

@stop