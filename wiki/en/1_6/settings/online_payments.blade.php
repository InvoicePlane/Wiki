@extends('layouts.master')

@section('title')
    Merchant Account Settings
@endsection

@section('content')

    <h2 class="page-title">Merchant Account Settings</h2>

    <h2 class="page-title">Online Payment Settings</h2>

    <p>InvoicePlane supports various different online payment providers like <b>PayPal</b>, <b>Stripe</b> or even the
        Bitcoin provider <b>Coinbase</b>. The following providers are supported by default.</p>

    <ul>
        <li><a href="https://www.authorize.net/" class="ext">AuthorizeNet</a></li>
        <li><a href="https://www.buckaroo-payments.com/" class="ext">Buckaroo Ideal</a></li>
        <li><a href="https://www.buckaroo-payments.com/" class="ext">Buckaroo PayPal</a></li>
        <li><a href="https://www.cardsave.net/" class="ext">CardSave</a></li>
        <li><a href="https://www.coinbase.com/" class="ext">Coinbase</a></li>
        <li><a href="https://www.eway.com.au/" class="ext">Eway Rapid</a></li>
        <li><a href="https://www.firstdata.com/en_us/home.html" class="ext">FirstData Connect</a></li>
        <li><a href="https://gocardless.com/en-eu/" class="ext">GoCardless</a></li>
        <li><a href="https://www.mastercard.com/gateway/payment-processing/online-credit-card-and-debit-card-payment-processing.html" class="ext">MasterCard Internet Gateway Service</a></li>
        <li><a href="https://www.mollie.com/en/" class="ext">Mollie</a></li>
        <li><a href="https://www.multisafepay.com/" class="ext">MultiSafepay</a></li>
        <li><a href="https://shop.nets.eu/web/no" class="ext">Netaxept</a></li>
        <li><a href="https://processing.paysafe.com/eu-en/" class="ext">NetBanx</a></li>
        <li><a href="https://www.payfast.co.za/" class="ext">PayFast</a></li>
        <li><a href="https://www.paypal.com" class="ext">Payflow Pro</a></li>
        <li><a href="https://www.paymentexpress.com/" class="ext">PaymentExpress</a></li>
        <li><a href="https://www.paypal.com" class="ext">PayPal</a></li>
        <li><a href="https://pin.net.au/" class="ext">Pin</a></li>
        <li><a href="https://www.sagepay.co.uk/" class="ext">SagePay</a></li>
        <li><a href="https://www.securepay.com.au/" class="ext">SecurePay</a></li>
        <li><a href="https://stripe.com/" class="ext">Stripe</a></li>
        <li><a href="https://www.targetpay.com/" class="ext">Targetpay Directbanking</a></li>
        <li><a href="https://www.targetpay.com/" class="ext">Targetpay Ideal</a></li>
        <li><a href="https://www.targetpay.com/" class="ext">Targetpay MrCash</a></li>
        <li><a href="https://www.2checkout.com/" class="ext">TwoCheckout</a></li>
        <li><a href="http://www.worldpay.com/us" class="ext">WorldPay</a></li>
    </ul>

    <h3>Configure your payment provider</h3>

    <p>To configure your payment provider, select the provider from the dropdown list. If you don't know which provider should be selected please contact your provider. We cannot offer any support for specific provider settings.</p>

    <p>After selecting a provider InvoicePlane will show you a configuration box will all needed settings. Make sure to enable the provider first. After that fill all needed information. Again: if you are not shure which fields to fill, contact your provider.</p>

    <div class="alert alert-warning">It is highly recommended to test if the online payment is working correctly using the <b>Test Mode</b> if available. This allows you to pay online without transfering real money.</div>

    <h2>Missing providers</h2>

    <p>At the moment InvoicePlane only supports some of all available payment providers. We may add support for custom providers in the future.</p>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.5/settings/email',
                    'title' => 'eMail Settings',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.5/settings/updatecheck',
                    'title' => 'Updatecheck',
                    'type' => 'article'
            )
    );
    ?>

@stop