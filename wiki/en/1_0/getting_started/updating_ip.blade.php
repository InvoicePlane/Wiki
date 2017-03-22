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

    <p>Version 1.5.0 comes with some changes that require your attention. Be very careful and keep in mind to make a backup before you start.</p>

    <ul>
        <li>Custom fields were overhauled and are now stored in an entirely other way than before. The setup will convert all existing custom fields. However, double-check if all fields were correctly migrated and if all values are still present. If not, report this bug to the community forums with as much information as possible.</li>
        <li>If you used the merchant settings before to offer online payments, you have to enter all credentials again. You can now select from a list of online payment providers. See the <a href="/en/1.0/settings/online-payments">Online Payment</a> page for more information.</li>
    </ul>

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