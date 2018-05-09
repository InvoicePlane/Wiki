@extends('layouts.master')

@section('title')
    Requirements
@endsection

@section('content')

    <h2 class="page-title">Requirements</h2>

    <p>
        If you want to use InvoicePlane you have to follow these requirements to use the application.
    </p>

    <ul>
        <li>
            A webserver / shared hosting with the following specifications:
            <ul>
                <li>MySQL >= 5.5 or the equivalent version of MariaDB</li>
                <li>PHP >= 7.0 (PHP 5.6 may not be supported any longer)</li>
                <li>
                    The following PHP extensions must be installed and activated:
                    <ul>
                        <li>php-gd</li>
                        <li>php-hash</li>
                        <li>php-json</li>
                        <li>php-mbstring</li>
                        <li>php-mcrypt</li>
                        <li>php-mysqli</li>
                        <li>php-openssl</li>
                        <li>php-recode</li>
                        <li>php-xmlrpc</li>
                        <li>php-zlib</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            An up-to-date web browser. We do recommend using either Google Chrome, Firefox or the latest version of
            Safari. Internet Explorer is only supported from version 11.
        </li>
    </ul>

    <div class="alert alert-warning">
        Please be aware that many users reported issues with the following hosting providers:<br>
        Go Daddy shared hosting
    </div>

    <div class="alert alert-danger">
        Please notice that PHP 5.5 is no longer supported and should <b>not</b> be used anymore for producton
        environments!
    </div>

    <?php
    $article_pagination = array(
        'next' => array(
            'url' => '/en/1.5/getting-started/installation',
            'title' => 'Installation',
            'type' => 'article'
        )
    );
    ?>

@stop
