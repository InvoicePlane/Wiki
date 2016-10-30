@extends('layouts.master')

@section('title')
    Update InvoicePlane
@endsection

@section('content')

    <h2 class="page-title">Update InvoicePlane</h2>

    <ol>
        <li><b>Make a backup of your database and all files!</b> This is very important to prevent any data loss.</li>
        <li>Download the latest version from <a href="https://invoiceplane.com/downloads" class="ext">InvoicePlane.com</a>.</li>
        <li>Copy all files to the root directory of your InvoicePlane installation but <b>do not</b> overwrite the following files:
            <ul>
                <li><code>/application/config/database.php</code></li>
                <li>Customized templates in <code>/application/views/</code></li>
            </ul>
        </li>
        <li>Update the URL in the <code>/index.php</code> file.</li>
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
            ),
            'next' => array(
                    'url' => '/en/1.0/modules/',
                    'title' => 'Modules',
                    'type' => 'section'
            )
    );
    ?>

@stop