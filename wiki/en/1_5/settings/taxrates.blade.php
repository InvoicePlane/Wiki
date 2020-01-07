@extends('layouts.master')

@section('title')
    Taxrates
@endsection

@section('content')

    <h2 class="page-title">Taxrates</h2>

    <p>If you want to add taxes to products / items or invoices you have to configure them on the Taxrates settings page.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_taxrates.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_taxrates.jpg">
        </a>
    </p>

    <h3 id="add">
        Add a new Taxrate <?= IP::headlineLink('/en/1.5/settings/taxrates#add'); ?>
    </h3>

    <p>To add a new taxrate, click the settings icon <code><i class="fa fa-cogs"></i></code> near the right hand side of the main menu, select <code>Taxrates</code>, and click the <code>New</code> button near the top right of the page.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_taxrates_form.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_taxrates_form.jpg">
        </a>
    </p>

    <p>First enter the official name of the taxrate. Be careful as this will be displayed on quotes or invoices as a description of the taxrate. Then enter the percentage of the taxrate and click on <code class="green">Save</code>.</p>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.5/settings/payment-methods',
                    'title' => 'Payment Methods',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.5/settings/user-accounts',
                    'title' => 'User Accounts',
                    'type' => 'article'
            )
    );
    ?>

@stop
