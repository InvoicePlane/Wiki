@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.quickstart') ?></h2>

<?php //@TODO Add more information about quotes, settings,... ?>

<h3><?php echo trans('getting_started.quickstart.login') ?></h3>

<p><?php echo trans('getting_started.quickstart.login.wo_subdir') ?></p>

<p><?php echo trans('getting_started.quickstart.login.w_subdir') ?></p>

<hr/>

<h3><?php echo trans('getting_started.quickstart.add_client') ?></h3>

<p><?php echo trans('getting_started.quickstart.add_client.text') ?></p>

<p><a href="/modules/clients"><?php echo trans('getting_started.quickstart.add_client.link') ?></a></p>

<hr/>

<h3><?php echo trans('getting_started.quickstart.create_invoice') ?></h3>

<p><?php echo trans('getting_started.quickstart.create_invoice.text') ?></p>
<p><?php echo trans('getting_started.quickstart.create_invoice.text2') ?></p>

<h3><?php echo trans('getting_started.quickstart.sending_invoice') ?></h3>

<p><?php echo trans('getting_started.quickstart.sending_invoice.text') ?></p>

<p><a href="/modules/invoices"><?php echo trans('getting_started.quickstart.invoice.link') ?></a></p>

<hr/>

<h3><?php echo trans('getting_started.quickstart.entering_payments') ?></h3>

<p><?php echo trans('getting_started.quickstart.entering_payments.offline') ?></p>
<p><?php echo trans('getting_started.quickstart.entering_payments.online') ?></p>

<p><a href="/modules/payments"><?php echo trans('getting_started.quickstart.entering_payments.link') ?></a></p>

<?php
$article_pagination = array(
    'previous' => array(
        'url' => '/getting-started/installation',
        'title' => 'global.installation',
        'type' => 'article'
    ),
    'next' => array(
        'url' => '/getting-started/move-from-fusioninvoice',
        'title' => 'global.move_from_fi',
        'type' => 'article'
    )
);
?>

@stop