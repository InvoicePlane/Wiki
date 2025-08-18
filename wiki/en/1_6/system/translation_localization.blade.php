@extends('layouts.master')

@section('title')
    Translation / Localization
@endsection

@section('content')

    <h2 class="page-title">Translation / Localization</h2>

    <p>InvoicePlane comes with the English language by default. To contribute to or to download other language packs
        please visit the <a href="https://crowdin.com/project/invoiceplane" target="_blank" class="ext">translation repository</a>.</p>

    <h3 id="install">
        Install a new translation <?= IP::headlineLink('/en/1.6/system/translation-localization#install'); ?>
    </h3>

    <div class="alert alert-warning">
        Please notice: some translations are not complete so some texts will be displayed in English. So do not delete
        the english language folder!
    </div>

    <ol>
        <li>Download the translation pack from the <a href="https://crowdin.com/project/invoiceplane" target="_blank" class="ext">translation
                repository</a></li>
        <li>Open the folder of the language you want to install (<code>de</code> = German)</li>
        <li>Copy the folder that should be called something like <code>de_DE</code>, <code>fr_FR</code> or
            <code>es_AR</code></li>
        <li>Paste the folder to the following directory of your InvoicePlane installation:
            <code>/application/language/</code></li>
        <li>Apply the language in your <a href="{{ url('en/1.6/settings/general') }}">general settings</a>.</li>
    </ol>

    <p>Your folder structure should look like this:</p>

    <pre>
├── application/
│   ├── ...
│   ├── language/
│   │   ├── english/
│   │   └── Deutsch/
│   │       ├── custom_lang.php
│   │       ├── ip_lang.php
│   │       ├── merchant_lang.php
│   │       └── ...
│   └── ...
├── assets/
└── ...
    </pre>

    <h3 id="customize">
        Customize translations <?= IP::headlineLink('/en/1.6/system/translation-localization#customize'); ?>
    </h3>

    <p>You are able to replace all language strings in the application with your own strings. We added a file called <code>custom_lang.php</code> which is located in every language folder (see above).</p>

    <p>To replace or alter a translation, search for the string in the main language files (ip_lang.php). You have to copy the whole line with the string into the <code>custom_lang.php</code> file that it looks like this:</p>

    <pre><code>
&lt;?php
/**
 * CUSTOM LANGUAGE STRINGS
 *
 * Add .....
 */

$lang = array(

    'language_string_key' => 'Actual content of the Language String',

);</code></pre>

    <p>Now, simply change the translation to whatever you need. But keep in mind that some strings are designed to fit into special spaces. Try to keep the character count or the original string.</p>

    <div class="alert alert-danger">
        If you want to use the <code>'</code> character in your string you have to replace it with <code>\'</code>.<br>
        Example: <code>'language_string_key' => 'Description with \'quotes\'',</code>
    </div>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.6/templates',
                    'title' => 'Templates',
                    'type' => 'section'
            ),
            'next' => array(
                    'url' => '/en/1.6/system/importing-data',
                    'title' => 'Importing Data',
                    'type' => 'article'
            )
    );
    ?>

@stop
