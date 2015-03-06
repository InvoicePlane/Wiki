@extends('layouts.master')

@section('content')

    <h2 class="page-title">Installation</h2>

    <p>For those of you comfortable with installing web applications, installing InvoicePlane should take 5 minutes or
        less.</p>

    <ol>
        <li><a href="https://invoiceplane.com/downloads">Download</a> and unzip the InvoicePlane full install package.
        </li>
        <li>Create an empty database on your web server.</li>
        <li>Upload the InvoicePlane files to your web server, either into its own subdirectory or into the public root
            of the web server.
        </li>
        <li>Run the InvoicePlane installer from your web browser and follow his instructions: <code>http://your-domain.com/setup</code>
        </li>
    </ol>

    <?php // @TODO Add Screenshots ?>

    <div class="alert alert-warning">
        <p>If you want to install InvoicePlane in a subdirectory please follow <a
                    href="https://community.invoiceplane.com/t/solved-installation-help/42/6">these instructions</a>.
        </p>
    </div>

    <p>Once the installer finished, the installation is complete and you may log into InvoicePlane using the email
        address and password you have chosen during the installation.</p>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/getting-started/requirements',
                    'title' => 'Requirements',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/getting-started/quickstart',
                    'title' => 'Quickstart',
                    'type' => 'article'
            )
    );
    ?>

@stop