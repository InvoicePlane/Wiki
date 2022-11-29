@extends('layouts.master')

@section('title')
    Update InvoicePlane
@endsection

@section('content')

    <h2 class="page-title">Upgrade InvoicePlane</h2>

    <h3>Contents</h3>

    <ol>
        <li><a href="#general">Upgrade information</a></li>
    </ol>

    <hr>

    <h3 id="general">
        Upgrade information <?= IP::headlineLink('/en/1.6/getting-started/updating-ip#general'); ?>
    </h3>

    <p>
        These steps are <b>always</b> required to make sure that InvoicePlane is updated correctly and the version
        number
        get's updated for your installation. Please make sure you read the additional information below before starting
        your upgrade if you upgrade to a specific version. For some versions additional steps are required.

    </p>
    <h4 id="16-breaking-changes">Breaking changes<?= IP::headlineLink('/en/1.6/getting-started/updating-ip#16-breaking-changes'); ?></h4>
    <p>InvoicePlane 1.6 is based (as its versions before) on CodeIgniter which officially still does not support PHP 8.1. The InvoicePlane Community updated InvoicePlane specific components to make InvoicePlane PHP 8.1 compatible, but not all features could be successfully ported; we will continue to put our efforts into porting the features we could not port with this upgrade. The breaking changes are: </p>
    <ul>
        <li>InvoicePlane 1.6.0 supports only Stripe as a payment gateway for online payments (please let us know what payment method you are missing at <a href="https://github.com/InvoicePlane/InvoicePlane/issues" target="_blank">GitHub</a>).</li>
    </ul>

    <h4>Instructions to upgrade to 1.6.0 from 1.5.10<?= IP::headlineLink('/en/1.6/getting-started/updating-ip#1510-16-instructions'); ?></h4>
    <hr />

    <div class="alert alert-warning">
        Before you start: <b>Make a backup of your database and all files!</b> There will be no support if you missed to
        make a backup and lost any data.
    </div>
    <hr />
    <ol>
        <li>
            Make a backup of your database and all files! This is very important to prevent any data loss.
        </li>
        <li>
            Download the latest version from <a href="https://invoiceplane.com/downloads"
                                                class="ext" target="_blank">InvoicePlane.com</a>.
        </li>
        <li>
            Copy all files to the root directory of your InvoicePlane installation but <b>do not</b> overwrite the
            following files:
            <ul>
                <li>The <code>ipconfig.php</code> file</li>
                <li>Customized templates in the <code>application/views/</code> folder</li>
                <li>The files for custom styles: <code>assets/core/css/custom.css</code> and <code>assets/core/css/custom-pdf.css</code>
                </li>
            </ul>
        </li>

        <li>Open <code>http://yourdomain.com/index.php/setup</code> and follow the instructions. The app will run all
            updates on its own.
        </li>
    </ol>
    <p>Now that the files are placed and the database is upgraded, it's time to fix the <code>ipconfig.php</code> file.</p>
    <ul>
        <li>
            open <code>ipconfig.php</code> and remove the top line in the file <code>php exit('No direct script access allowed');</code>
        </li>
        <li>close the <code>ipconfig.php</code> file</li>
        <li>Either rename or move the ipconfig file to another location, or both</li>
    </ul>
    <h5 id="16-renaming-ipconfig">Renaming ipconfig file<?= IP::headlineLink('/en/1.6/getting-started/updating-ip#16-renaming-ipconfig'); ?></h5>
    <ol>
        <li>Rename the ipconfig.php file to something that only you know, like <code>cust123.env</code>. Remember that name and location</li>
        <li>Open index.php</li>
        <li>remove <code>if (!file_exists('ipconfig.php')) {
            exit("The <b>ipconfig.php</b> file is missing! Please make a copy of the <b>ipconfig.php.example</b> file and rename it to <b>ipconfig.php</b>");
        }</code></li>
        <li>In this piece of code
            <code>
                $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'ipconfig.php');
            </code>
            Place the name of your newly renamed ipconfig.php file. So if you renamed it to <strong>cust123.env</strong> then your new code will be:
            <code>
                $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'cust123.env');
            </code>
        </li>
    </ol>
    <h5 id="16-moving-ipconfig">Moving ipconfig file<?= IP::headlineLink('/en/1.6/getting-started/updating-ip#16-moving-ipconfig'); ?></h5>
    <ol>
        <li>Move the ipconfig.php file to a location that only you know, for example 1 directory higher than the current directory. We call that <code>moving it outside the document root</code></li>
        <li>Open index.php</li>
        <li>remove <code>if (!file_exists('ipconfig.php')) {
            exit("The <b>ipconfig.php</b> file is missing! Please make a copy of the <b>ipconfig.php.example</b> file and rename it to <b>ipconfig.php</b>");
        }</code></li>
        <li>In this piece of code
            <code>
                $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'ipconfig.php');
            </code>
            Place the <strong>location</strong> of your newly moved ipconfig.php file. So if you moved it <strong>outside the document root</strong> then your new code will be:
            <code>
                $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '../ipconfig.php');
            </code>
            <strong>OR</strong>
            <code>
                $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 'ipconfig.php'));
            </code>
        </li>
    </ol>
    <div class="alert alert-warning">
        You can also rename AND move your ipconfig.php file, as long as you adjust your index.php file, it will be allright.
    </div>
    <p>Now that the <code>ipconfig.php</code> file is fixed, moved and protected, it's time to log in and see if everything is working</p>
    <ul>
        <li>Login again and check if everything is working.</li>
        <li>If you were using the online payments module please navigate to <code>//your-domain.com/settings</code> and to the tab <code>online payment</code> and disable all payment methods that are not <i>stripe</i>. InvoicePlane 1.6 at the moment supports only Stripe as a payment gateway.</li>
    </ul>
    <div class="alert alert-warning">
        Protect your newly renamed .env file
    </div>
    <div class="alert alert-info">
        <?php echo trans('global.footernotice') ?>
    </div>

    <?php
    $article_pagination = array(
        'previous' => array(
            'url' => '/en/1.6/getting-started/quickstart',
            'title' => 'Quickstart',
            'type' => 'article'
        ),
        'next' => array(
            'url' => '/en/1.6/modules/',
            'title' => 'Modules',
            'type' => 'section'
        )
    );
    ?>

@stop
