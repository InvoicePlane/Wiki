@extends('layouts.master')

@section('title')
    Email Settings
@endsection

@section('content')

    <h2 class="page-title">Email Settings</h2>

    <p>Before InvoicePlane can send emails you have to configure he email settings here. You can choose between three different ways to send emails.<br/>
    If you don't want that invoice and quote pdf files are automatically attached to emails disable this feature by changing <code>Attach Quote/Invoice on email?</code> to <code>No</code></p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_settings_mail.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_settings_mail.jpg">
        </a>
    </p>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <th>Method</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>PHP Mail</td>
                <td>Uses the built-in email sending method of PHP which allows to send mails without any configuration.</td>
            </tr>
            <tr>
                <td>Sendmail</td>
                <td>Like PHP Mail all emails will be sent without the need to configure anything. Please choose Sendmail only if you are sure that your server has Sendmail installed, enabled and configured because it is possible that your servers OS does not ship with Sendmail by default.</td>
            </tr>
            <tr>
                <td>SMTP</td>
                <td>You can also use a SMTP server to send mails. Using SMTP allows you to send emails via external servers. You will need the SMTP server's hostname, login credentials and the used port and security method.</td>
            </tr>
        </table>
    </div>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.5/settings/taxes',
                    'title' => 'Tax Settings',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.5/settings/online-payments',
                    'title' => 'Merchant Account Settings',
                    'type' => 'article'
            )
    );
    ?>

@stop