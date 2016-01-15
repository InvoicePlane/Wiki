@extends('layouts.master')

@section('title')
    Tax Settings
@endsection

@section('content')

    <h2 class="page-title">Tax Settings</h2>

    <p>The general settings page sets a lot of options that will change the look &amp; feel of the whole application or that are needed for some special purposes.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_settings_taxes.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_settings_taxes.jpg">
        </a>
    </p>

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tr>
                <th>Setting</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Default Invoice Tax Rate</td>
                <td>Choose the <a href="{{ url('en/1.0/settings/taxrates') }}">Taxrate</a> that should be applied to an invoice by default</td>
            </tr>
            <tr>
                <td>Default Invoice Tax Rate</td>
                <td>Choose where to place the invoice tax</td>
            </tr>
            <tr>
                <td>Default Invoice Tax Rate</td>
                <td>Choose the <a href="{{ url('en/1.0/settings/taxrates') }}">Taxrate</a> that should be applied to every product of an invoice by default</td>
            </tr>
        </table>
    </div>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/settings/quotes',
                    'title' => 'Quote Settings',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/settings/email',
                    'title' => 'eMail Settings',
                    'type' => 'article'
            )
    );
    ?>

@stop