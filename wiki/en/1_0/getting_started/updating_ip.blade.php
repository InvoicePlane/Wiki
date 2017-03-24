@extends('layouts.master')

@section('title')
    Update InvoicePlane
@endsection

@section('content')

    <h2 class="page-title">Update InvoicePlane</h2>

    <div class="alert alert-warning">
        Before you start: <b>Make a backup of your database and all files!</b> There will be no support if you missed to make a backup and lost any data.
    </div>

    <ol>
        <li>Make a backup of your database and all files! This is very important to prevent any data loss.</li>
        <li>Download the latest version from <a href="https://invoiceplane.com/downloads" class="ext">InvoicePlane.com</a>.</li>
        <li>Copy all files to the root directory of your InvoicePlane installation but <b>do not</b> overwrite the following files:
            <ul>
                <li>The <code>/ipconfig.php</code> file</li>
                <li>Customized templates in <code>/application/views/</code></li>
            </ul>
        </li>
        <li>Open <code>http://yourdomain.com/index.php/setup</code> and follow the instructions. The app will run all updates onit's own.</li>
        <li>Login again and check if everything is working.</li>
    </ol>

    <hr>

    <h3>Upgrade to InvoicePlane 1.5.0</h3>

    <p>Version 1.5.0 comes with some changes that require your attention. Be very careful and keep in mind to make a backup before you start. Make sure to read all instructions completely as we do not support any broken installations because you didn't followed this guid.</p>

    <div class="alert alert-warning">Please follow the next steps <b>before</b> running the update / setup!</div>

    <ol>
        <li>The most important change: InvoicePlane now uses a new configuration file that is completely independent from he code itself. This means you set the configuration file once and you will never have to worry to overwrite some important settings. To migrate the configuration, follow these steps:
            <ul>
                <li>Make a copy of the <code>ipconfig.php.example</code> file and rename the copy to <code>ipconfig.php</code></li>
                <li>Open the <code>index.php</code> file and copy your URL from the top of the file.</li>
                <li>Open the <code>ipconfig.php</code> file and paste the URL into the <code>IP_URL</code> setting like this: <code>IP_URL=http://ip1.dev</code></li>
                <li>Open the <code>application/config/database.php</code> file and copy your URL you set on top of the file.</li>
                <li>Set your database credentials in the <code>ipconfig.php</code> file. The database host goes into the <code>DB_HOSTNAME</code> setting like this: <code>DB_HOSTNAME=localhost</code>. All other database settings are set like this. The database port may not be set so manually set it to <code>DB_PORT=3306</code></li>
            </ul>
        </li>
        <li>If you modified any other files like the tempaltes or any mPDF settings, make backups of these files in another directory!</li>
        <li>Now delete all files within the InvoicePlane directory as many files and folders are now deprecated. Leaving all old files where they are may lead to problems in the future! The setup will not clean up old files on his own!</li>
        <li>Custom fields were overhauled and are now stored in an entirely other way than before. The setup will convert all existing custom fields. However, double-check if all fields were correctly migrated and if all values are still present. If not, report this bug to the community forums with as much information as possible.</li>
        <li>If you used the merchant settings before to offer online payments, you have to enter all credentials again as they can't be migrated automatically.
            <br>You can now select from a list of online payment providers. See the <a href="/en/1.0/settings/online-payments">Online Payment</a> page for more information.</li>
        <li>If you modified any mPDF settings or added custom fonts, you have to copy these changes to the new location of mPDF which is now stored in this directory:
            <br><code>/vendor/mpdf/mpdf</code></li>
    </ol>

    <div class="alert alert-info">
        <?php echo trans('global.footernotice') ?>
    </div>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/getting-started/quickstart',
                    'title' => 'Quickstart',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/modules/',
                    'title' => 'Modules',
                    'type' => 'section'
            )
    );
    ?>

@stop