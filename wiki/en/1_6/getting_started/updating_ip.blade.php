@extends('layouts.master')

@section('title')
    Update InvoicePlane
@endsection

@section('content')

    <h2 class="page-title">Upgrade InvoicePlane</h2>

    <h3>Contents</h3>

    <ul>
        <li><a href="#general">Upgrade information</a></li>
        <li><a href="#16-breaking-changes">Breaking changes</a></li>
        <li><a href="#1511-16-instructions">Upgrade instructions (v1.5.11 to v1.6.0)</a>
            <ol>
                <li>Preliminary operations</li>
                <li>Replace files & test </li>
            </ol>
        </li>
    </ul>

    <hr>

    <h3 id="general">
        Upgrade information <?= IP::headlineLink('/en/1.6/getting-started/updating-ip#general'); ?>
    </h3>
    <h5 id="16-breaking-changes">Breaking changes (v1.6.0) <?= IP::headlineLink('/en/1.6/getting-started/updating-ip#16-breaking-changes'); ?></h5>
    <p>InvoicePlane 1.6 is based (as its versions before) on CodeIgniter v3 which officially still does not support PHP >=8.0. The InvoicePlane Community updated InvoicePlane specific components to make InvoicePlane PHP >=8.0 compatible, but not all features could be successfully ported; we will continue to put our efforts into porting the features we could not port with this upgrade. The breaking changes are: </p>
    <ul>
        <li>InvoicePlane 1.6.0 supports only Stripe as a payment gateway for online payments (please let us know what payment method you are missing at <a href="https://github.com/InvoicePlane/InvoicePlane/issues" target="_blank">GitHub</a>).</li>
    </ul>

    <h3 id="1511-16-instructions">Instructions to upgrade to 1.6.0 from 1.5.11 <?= IP::headlineLink('/en/1.6/getting-started/updating-ip#1511-16-instructions'); ?></h3>
    <h5 id="160-1-preliminary-operations">1. Preliminary operations <?= IP::headlineLink('/en/1.6/getting-started/updating-ip#160-1-preliminary-operations'); ?></h5>
    <ol>
        <li>
            Make a backup of your database and all files. (This is <b>very important</b> to prevent any data loss)
        </li>
        <li>
            Download the latest version from <a href="https://invoiceplane.com/downloads"
                                                class="ext" target="_blank">InvoicePlane.com</a>.
        </li>
    </ol>
    <h5 id="160-2-replace-files">2. Replace files & test <?= IP::headlineLink('/en/1.6/getting-started/updating-ip#160-2-replace-files'); ?></h5>
    <ol>
        <li>
            Copy all files to the root directory of your InvoicePlane installation but <b>do not</b> overwrite the
            following files:
            <ul>
                <li>The <code>ipconfig.php</code> file</li>
                <li>Customized templates in the <code>application/views/</code> folder</li>
                <li>The files for custom styles: <code>assets/core/css/custom.css</code> and <code>assets/core/css/custom-pdf.css</code>
                </li>
                <li>Uploaded images in the <code>uploads/</code> folder (e. g. your company logo)</li>
                <li>Custom language keys at <code>application/language/COUNTRY/custom_lang.php</code></li>
            </ul>
            <div class="alert alert-info">
                <p><b>Hint:</b> An <i>easy</i> way of performing this operation is to upload the whole new InvoicePlane version in a different folder, outside of your current installation root folder, and copy the above mentioned files in the new folder you just uploaded. Afterwards just rename your current folder to something like <code>my_current_folder<b>_old</b></code> and rename your new-version-folder with the name of <code>my_current_folder</code>.
            </div>
        </li>
        <li>
            <p>Now that the files are placed, it's time to fix the <code>ipconfig.php</code> file.</p>
            <ul>
                <li>
                    open <code>ipconfig.php</code> and comment out the top line in the file by adding a <code>#</code> at the beginning of the first line. The result should be like this:
                    <pre># &lt;?php exit('No direct script access allowed'); ?&gt;</pre>
                </li>
                <li>close the <code>ipconfig.php</code> file</li>
            </ul>
        </li>
        <li>Open <code>http://yourdomain.com/index.php/setup</code> and follow the instructions. The app will run all
            updates on its own.
            <ul>
                <li>If you encounter any errors when upgrading the table, press "Try Again" to resolve those errors and continue with the setup.</li>
            </ul>
        </li>
        <li>Now that the <code>ipconfig.php</code> file is fixed, moved and protected, it's time to log in and see if everything is working</p>
            <ul>
                <li>Login again and check if everything is working.</li>
                <li>If you were using the online payments module please navigate to <code>//your-domain.com/settings</code> and to the tab <code>online payment</code> and disable all payment methods that are not <i>stripe</i>. InvoicePlane 1.6 at the moment supports only Stripe as a payment gateway.</li>
            </ul>
        </li>
    </ol>
    
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
