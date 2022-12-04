@extends('layouts.master')

@section('title')
    Merchant Account Settings
@endsection

@section('content')

    <h2 class="page-title">Merchant Account Settings</h2>

    <h2 class="page-title">Online Payment Settings</h2>

    <p>InvoicePlane 1.6 supports only <b>Stripe</b> by default as a payment gateway. The reason why the other providers were dropped can be fount <a href="/en/1.6/getting-started/updating-ip#16-breaking-changes" target="_blank">here</a>. Please let us know what payment method you are missing at <a href="https://github.com/InvoicePlane/InvoicePlane/issues" target="_blank">GitHub</a></p>

    <h3>Configure your payment provider</h3>

    <p>To configure your payment provider, select the provider from the dropdown list. If you don't know which provider should be selected please contact your provider. We cannot offer any support for specific provider settings.</p>

    <p>After selecting a provider InvoicePlane will show you a configuration box will all needed settings. Make sure to enable the provider first. After that fill all needed information. Again: if you are not shure which fields to fill, contact your provider.</p>

    <div class="alert alert-warning">It is highly recommended to test if the online payment is working correctly using the <b>Test Mode</b> if available. This allows you to pay online without transfering real money.</div>

    <h2>Missing providers</h2>

    <p>At the moment InvoicePlane only supports some of all available payment providers. We may add support for custom providers in the future.</p>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.6/settings/email',
                    'title' => 'eMail Settings',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.6/settings/updatecheck',
                    'title' => 'Updatecheck',
                    'type' => 'article'
            )
    );
    ?>

@stop