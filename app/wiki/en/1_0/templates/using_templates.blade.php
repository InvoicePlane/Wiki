@extends('layouts.master')

@section('content')

    <h2 class="page-title">Using Templates</h2>

    <p>First of all, the templates shipped with InvoicePlane are what they are called: templates. You <em>can</em> use them directly for your business but they are meant to be duplicated and customized.</p>
    <p>There are two main types of templates which are used:</p>

    <ul>
        <li>PDF Templates - Used to generate the quote and invoices PDF files</li>
        <li>Web Templates - Used to display the quotes and invoices in a web browser for guest users (clients)</li>
    </ul>

    <h3 id="pdf">
        Using PDF Templates <?php IP::headlineLink('/en/1.0/templates/using-templates#pdf'); ?>
    </h3>

    <p>All PDF templates can be found in the following folders of the application:</p>
    <ul>
        <li><code>/application/views/invoice_templates/pdf</code> for invoices</li>
        <li><code>/application/views/quote_templates/pdf</code> for quotes</li>
    </ul>

    <p>You can select which templates should be used in the system settings for either <a href="/en/1.0/settings/invoices">Invoices</a> or <a href="/en/1.0/settings/quotes">Quotes</a>. You can find the select boxes below the headline "Templates". Simply select the template, save and the template will be used for the next quote or invoice.</p>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/settings/',
                    'title' => 'Settings',
                    'type' => 'section'
            ),
            'next' => array(
                    'url' => '/en/1.0/templates/customize-templates',
                    'title' => 'Customize Templates',
                    'type' => 'article'
            )
    );
    ?>

@stop