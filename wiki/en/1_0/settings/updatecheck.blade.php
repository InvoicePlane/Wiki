@extends('layouts.master')

@section('title')
    Updatecheck
@endsection

@section('content')

    <h2 class="page-title">Updatecheck</h2>

    <p>On the updatecheck page InvoicePlane checks for updates with contacting our website. The result of the check will be displayed below the version.<br/>Additionally the latest news will be displayed below the updatecheck.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_settings_updates.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_settings_updates.jpg">
        </a>
    </p>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/settings/merchant-account',
                    'title' => 'Merchant Account Settings',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/settings/custom-fields',
                    'title' => 'Custom Fields',
                    'type' => 'article'
            )
    );
    ?>

@stop