@extends('layouts.master')

@section('title')
    General Settings
@endsection

@section('content')

    <h2 class="page-title">General Settings</h2>

    <p>The general settings page sets a lot of options that will change the look &amp; feel of the whole application or
        that are needed for some special purposes.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_settings_general.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_settings_general.jpg">
        </a>
    </p>

    <h3 id="general">
        General settings <?= IP::headlineLink('/en/1.0/settings/general#general'); ?>
    </h3>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <th>Setting</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Language</td>
                <td>Choose the <a href="{{ url('en/1.0/system/translation-localization') }}">language</a> for the application</td>
            </tr>
            <tr>
                <td>First day of the Week</td>
                <td>Choose if the week should start on sunday or monday</td>
            </tr>
            <tr>
                <td>Default Country</td>
                <td>Select the country that will be used automatically when adding clients</td>
            </tr>
            <tr>
                <td>Date Format</td>
                <td>Choose the date format of the application</td>
            </tr>
            <tr>
                <td>Currency Symbol</td>
                <td>Choose the currency symbol like <code>&euro;</code> or <code>&dollar;</code>. You can also use any
                    letters like <code>AUD</code> or <code>CHF</code></td>
            </tr>
            <tr>
                <td>Currency Symbol Placement</td>
                <td>Choose if the currency symbol should be placed before or after amounts</td>
            </tr>
            <tr>
                <td>Thousand Separator</td>
                <td>Select if thousands should be separated by <code>,</code> or <code>.</code></td>
            </tr>
            <tr>
                <td>Decimal Point</td>
                <td>Select if the decimals point should be <code>,</code> or <code>.</code></td>
            </tr>
            <tr>
                <td>Tax Rate Decimal Places</td>
                <td>Select how much placed after the decimal point should be used for tax rates.</td>
            </tr>
        </table>
    </div>

    <h3 id="dashboard">
        Dashboard settings <?= IP::headlineLink('/en/1.0/settings/general#dashboard'); ?>
    </h3>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <th>Setting</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Quote Overview Period</td>
                <td>Select the period that should be used for quotes on the quote overview</td>
            </tr>
            <tr>
                <td>Invoice Overview Period</td>
                <td>Select the period that should be used for invoices on the invoice overview</td>
            </tr>
        </table>
    </div>

    <h3 id="interface">
        Interface settings <?= IP::headlineLink('/en/1.0/settings/general#interface'); ?>
    </h3>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <th>Setting</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Disable the Sidebar</td>
                <td>Choose if the sidebar should be disabled</td>
            </tr>
            <tr>
                <td>Custom Title</td>
                <td>Set a custom title which will be shown on browser tabs</td>
            </tr>
            <tr>
                <td>Use Monospace font for Amounts</td>
                <td>Choose if the application should use a monospace font for amounts.<br/>Example: <code
                            style="font-family: monospace">1.345,23 &euro;</code></td>
            </tr>
            <tr>
                <td>Login Logo</td>
                <td>Upload an image that will be displayed above the login form.<br/>
                    <small>Recommended size: about 300px width</small>
                </td>
            </tr>
            <tr>
                <td>Cron Key</td>
                <td>You will need this cron key to setup <a href="{{ url('en/1.0/modules/recurring-invoices') }}">recurring
                        invoices</a>.
                </td>
            </tr>
        </table>
    </div>

    <h3 id="interface">
        System settings <?= IP::headlineLink('/en/1.0/settings/general#system'); ?>
    </h3>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <td>Send all outgoing emails as BCC to the admin account</td>
                <td>If you enable this option <b>every</b> outgoing email is sent as an anonymous copy (BCC) to the
                    administrator. The administrator is the user that was created during the InvoicePlane setup.
                </td>
            </tr>
            <tr>
                <td>Cron Key</td>
                <td>You will need this cron key to setup <a href="{{ url('en/1.0/modules/recurring-invoices') }}">recurring
                        invoices</a>
                </td>
            </tr>
            <tr>
                <td>Enable Debug Mode</td>
                <td>The debug mode enables logging for the application. The logs can be found in the <code>/application/logs</code> folder or in your browser console.</a>
                </td>
            </tr>
        </table>
    </div>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/modules',
                    'title' => 'Modules',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/settings/invoices',
                    'title' => 'Invoice Settings',
                    'type' => 'article'
            )
    );
    ?>

@stop
