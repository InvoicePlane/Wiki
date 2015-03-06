@extends('layouts.master')

@section('content')

    <h2 class="page-title">Update InvoicePlane</h2>

    <ol>
        <li>Make a backup of your database and all files.</li>
        <li>Download the latest version from <a href="https://invoiceplane.com/downloads"
                                                class="ext">InvoicePlane.com</a>.
        </li>
        <li>Copy all files to the root directory of your InvoicePlane installation but <b>do not</b> overwrite the file
            <code>/application/config/database.php</code>!
        </li>
        <li>Open <code>http://yourdomain.com/setup</code> and follow the instructions. The app will run all updates on
            it's own.
        </li>
        <li>Login again and check if everything is working.</li>
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
            )
    );
    ?>

@stop