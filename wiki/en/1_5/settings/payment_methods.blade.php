@extends('layouts.master')

@section('title')
    Payment Methods
@endsection

@section('content')

    <h2 class="page-title">Payment Methods</h2>

    <p>Payment Methods</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_payment_methods.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_payment_methods.jpg">
        </a>
    </p>

    <h3 id="add">
        Add a Payment Method <?= IP::headlineLink('/en/1.5/settings/payment-methods#add'); ?>
    </h3>

    <p>To add a new payment method, click the settings icon <code><i class="fa fa-cogs"></i></code> near the right hand side of the main menu, select <code>Payment Methods</code>, and click the <code>New</code> button near the top right of the page.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_payment_methods_form.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_payment_methods_form.jpg">
        </a>
    </p>

    <p>Simply enter the name of the payment method and click on <code class="green">Save</code> button. The method will be available when adding a payment.</p>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.5/settings/invoice-groups',
                    'title' => 'Invoicegroups',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.5/settings/taxrates',
                    'title' => 'Taxrates',
                    'type' => 'article'
            )
    );
    ?>

@stop
