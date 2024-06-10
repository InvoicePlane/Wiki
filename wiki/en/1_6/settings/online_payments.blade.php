@extends('layouts.master')

@section('title')
    Merchant Account Settings
@endsection

@section('content')

    <h2 class="page-title">Online Payment Settings</h2>

    <p>InvoicePlane 1.6 supports only <b>Stripe</b> by default as a payment gateway. The reason why the other providers were dropped can be found <a href="/en/1.6/getting-started/updating-ip#16-breaking-changes" target="_blank">here</a>. Please let us know what payment method you are missing at <a href="https://github.com/InvoicePlane/InvoicePlane/issues" target="_blank">GitHub</a></p>

    <h4>Configure your payment provider</h4>
    <p>To configure your payment provider, select the provider from the dropdown list. If you don't know which provider should be selected please contact your provider. We cannot offer any support for specific provider settings.</p>
    <p>After selecting a provider InvoicePlane will show you a configuration box will all needed settings. Make sure to enable the provider first. After that fill all needed information. Again: if you are not shure which fields to fill, contact your provider.</p>

    <div class="alert alert-warning">It is highly recommended to test if the online payment is working correctly using the <b>Test Mode</b> if available. This allows you to pay online without transfering real money.</div>

    <h4>Configure <b>Stripe</b> as a payment provider</h4>
    <ol>
        <li>Login or regiser for an account at <a href="https://stripe.com" target="_blank">stripe.com</a></li>
        <li>Once you logged in, on the top search bar look for the <code>API Keys</code> page.</li>
        <li>Create a new <i>secret key</i>.</li>
        <li>Now, open the <code>settings</code> in your InvoicePlane installation and navigate to the <code>online payment</code> tab.</li>
        <li>Tick the <code>Enable Online Payments</code> checkbox.</li>
        <li>From the dropdown list select <code>Stripe</code> as a payment provider.</li>
        <li>Tick the <code>enable</code> checkbox on the stripe card that appeared when you selected stripe as a payment provider in the last step.</li>
        <li>Insert the secret key and the publishable key in the corrisponding fields. The secret key must be set in the field that hides the characters (like a password).</li>
        <li>Click on <b>save</b>, and you are done!</li>
    </ol>
    <p><small>Please take note that InvoicePlane is in no way affiliated to Stripe and that we are not able to help with Stripe specific issues. These instructions only concern integrating Stripe as a payment gateway in InvoicePlane.</small></p>

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
