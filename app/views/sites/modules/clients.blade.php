@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.clients') ?></h2>

<h3><?php echo trans('modules.clients.view_clients') ?></h3>

<p><?php echo trans('modules.clients.view_clients.view') ?></p>

<p>
<a href="http://invoiceplane.com/content/screenshots/ip_clients.jpg" class="thumbnail" data-lightbox="image-1">
    <img src="http://invoiceplane.com/content/screenshots/ip_clients.jpg">
</a>
</p>

<p><?php echo trans('modules.clients.view_clients.options') ?></p>

<ul>
    <li><?php echo trans('modules.clients.view_clients.options.1') ?></li>
    <li><?php echo trans('modules.clients.view_clients.options.2') ?></li>
    <li><?php echo trans('modules.clients.view_clients.options.3') ?></li>
    <li><?php echo trans('modules.clients.view_clients.options.4') ?></li>
    <li><?php echo trans('modules.clients.view_clients.options.5') ?></li>
</ul>

<h3><?php echo trans('modules.clients.add_clients') ?></h3>

<p><?php echo trans('modules.clients.add_clients.text.1') ?></p>

<p>
<a href="/content/screenshots/ip_clients_add.jpg" class="thumbnail" data-lightbox="image-1">
    <img src="/content/screenshots/ip_clients_add.jpg">
</a>
</p>

<p><?php echo trans('modules.clients.add_clients.text.2') ?></p>

<h3><?php echo trans('modules.clients.client_login') ?></h3>

<p><?php echo trans('modules.clients.client_login.text') ?></p>


<?php
$article_pagination = array(
    'next' => array(
        'url' => '/modules/quotes',
        'title' => 'global.quotes',
        'type' => 'article'
    )
);
?>

@stop