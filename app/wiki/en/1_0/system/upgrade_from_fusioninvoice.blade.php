@extends('layouts.master')

@section('content')

<h2>Upgrade form FusionInvoice v1.x</h2>

<p>If you used FusionInvoice v.1x to manage your invoices you can migrate to InvoicePlane.<br/>Follow these steps to migrate your installation.</p>

<h3>Make a full Backup</h3>

<p>Actually you don't have to make a full backup of your FusionInvoice setup but we recommend to do so. We can not guarantee that the <a href="https://github.com/InvoicePlane/Migrationtool" >Migrationtool</a> is working without problems.<br/>Make a complete copy of the folder that holds your installation and make a backup of your database.</p>

<h3>Use the Migrationtool</h3>

<ol>
    <li><a href="https://github.com/InvoicePlane/Migrationtool/archive/master.zip" >Download the Migrationtool</a> and unzip it to any directory on your webserver or your local machine and check if you copied the <code>.htaccess</code> file.</li>
    <li>If you want to run the tool in a subdirectory please set the directory in the <code>config.php</code> file.</li>
    <li>Then open the URL which can access the Migrationtool and follow the instructions.</li>
</ol>

<div class="alert alert-warning">Please do <b>not</b> use multiple directories like <code>yourdomain.com/tools/migration/migrationtool</code> as the tool only supports one directory at the moment.</div>

<h3>Run the InvoicePlane Updates</h3>

<p>After converting the database it's <span class="text-danger">very important</span> that you open the setup wizard of your InvoicePlane installation located at <code>yourdomain.com/setup</code>. Follow the instructions and the setup will run any necessary database updates. Without these updates InvoicePlane will not run.</p>

<div class="alert alert-info">
    <?php echo trans('global.footernotice') ?>
</div>

<?php
$article_pagination = array(
        'previous' => array(
                'url' => '/en/1.0/system/importing-data',
                'title' => 'Importing Data',
                'type' => 'article'
        )
);
?>

@stop