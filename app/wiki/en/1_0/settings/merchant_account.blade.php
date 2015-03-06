@extends('layouts.master')

@section('content')

    <h2>Merchant Account Settings</h2>

    <p>The merchant account is needed if you want to offer online payments via PayPal to your customers. Before you can configure the merchant account you have to get credentials from PayPal. Follow <a href="https://developer.paypal.com/docs/classic/api/apiCredentials/" class="ext">these instructions</a> to get the credentials needed on this settings page.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_settings_merchant.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_settings_merchant.jpg">
        </a>
    </p>

    <p>Make sure that you have valid credentials and enter them in the correct fields. Set a proper currency code that should be equal to the currency set in the general settings.</p>

    <div class="alert alert-warning">It is highly recommended to test if the online payment is working correctly using the <code>Test Mode</code>. Set the Test Mode to <code>On</code> and create a test account in your PayPal merchant account. This allows you to pay online without transfering real money.</div>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/settings/email',
                    'title' => 'eMail Settings',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/settings/updatecheck',
                    'title' => 'Updatecheck',
                    'type' => 'article'
            )
    );
    ?>

@stop