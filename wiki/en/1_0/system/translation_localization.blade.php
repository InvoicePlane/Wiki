@extends('layouts.master')

@section('title')
    Translation / Localization
@endsection

@section('content')

    <h2 class="page-title">Translation / Localization</h2>

    <p>InvoicePlane comes with the English language by default. To contribute to or to download other language packs
        please visit the <a href="http://translations.invoiceplane.com/" class="ext">translation repository</a>.</p>

    <h3 id="install">
        Install a new translation <?php IP::headlineLink('/en/1.0/system/translation-localization#install'); ?>
    </h3>

    <div class="alert alert-warning">
        Please notice: some translations are not complete so some texts will be displayed in English. So do not delete
        the english language folder!
    </div>

    <ol>
        <li>Download the translation pack from the <a href="http://translations.invoiceplane.com/" class="ext">translation
                repository</a></li>
        <li>Open the folder of the language you want to install (<code>de</code> = German)</li>
        <li>Copy the folder that should be called something like <code>de_DE</code>, <code>fr_FR</code> or
            <code>es_AR</code></li>
        <li>Paste the folder to the following directory of your InvoicePlane installation:
            <code>/application/language/</code></li>
        <li>Apply the language in your <a href="{{ url('en/1.0/settings/general') }}">general settings</a>.</li>
    </ol>

    <p>Your folder structure should look like this:</p>

    <pre>
├── application/
│   ├── ...
│   ├── language/
│   │   ├── english/
│   │   └── de_DE/
│   │       ├── ip_lang.php
│   │       └── merchant_lang.php
│   └── ...
├── assets/
└── ...
    </pre>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/templates',
                    'title' => 'Templates',
                    'type' => 'section'
            ),
            'next' => array(
                    'url' => '/en/1.0/system/importing-data',
                    'title' => 'Importing Data',
                    'type' => 'article'
            )
    );
    ?>

@stop