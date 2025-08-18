@extends('layouts.master')

@section('title')
    Installation
@endsection

@section('content')

    <h2 class="page-title">Installation</h2>

    <p>For those of you comfortable with installing web applications, installing InvoicePlane should take 5 minutes or
        less.</p>

    <ol>
        <li><a href="https://invoiceplane.com/downloads">Download</a> and extract the archive.</li>
        <li>Create an empty database on your web server.</li>
        <li>Upload the files to your web server, either into its own subdirectory or into the public root
            of the web server.
        </li>
        <li>Open <code>index.php</code> and set your URL like instructed in the file.</li>
        <li>Run the InvoicePlane installer from your web browser and follow his instructions: <code>http://your-domain.com/index.php/setup</code>
        </li>
    </ol>

    <p>Once the installer finished, the installation is complete and you may log into InvoicePlane using the email
        address and password you have chosen during the installation.</p>

    <h3 id="htaccess">
        Remove index.php from the URL <?= IP::headlineLink('/en/1.0/getting-started/installation#htaccess'); ?>
    </h3>

    <ol>
        <li>Make sure that <a href="https://go.invoiceplane.com/apachemodrewrite">mod_rewrite</a> is enabled on your web server.</li>
        <li>Open the file <code>/application/config/config.php</code></li>
        <li>Search for <code>$config['index_page'] = 'index.php';</code> in this file and replace it with <code>$config['index_page'] = '';</code></li>
        <li>Rename the <code>htaccess</code> file to <code>.htaccess</code></li>
    </ol>

    <p>Now open <code>http://your-domain.com/setup</code> to run the setup.</p>

    <h3 id="subdir">
        Run InvoicePlane in a sub directory <?= IP::headlineLink('/en/1.0/getting-started/installation#subdir'); ?>
    </h3>

    <p>If you want to run InvoicePlane in a sub directory (e.g. <code>http://yourdomain.com/invoices/</code>) you have to modify the <code>.htaccess</code> file which is located in the root directory. You must add the line</p>
    <pre>RewriteBase /sub-directory</pre>
    <p>where <code>sub-directory</code> is the directory you want to use. The content of the file should look like this:</p>
    <pre>RewriteEngine on
RewriteBase /sub-directory
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule . index.php [L]</pre>



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
