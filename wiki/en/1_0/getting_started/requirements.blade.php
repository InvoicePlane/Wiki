@extends('layouts.master')

@section('title')
    Requirements
@endsection

@section('content')

    <h2 class="page-title">Requirements</h2>

    <p>If you want to use InvoicePlane you have to follow these requirements:</p>

    <ul>
        <li>
            A webserver / webhost with the following specifications:
            <ul>
                <li>MySQL > 5.x</li>
                <li>PHP > 5.5.0 with the following PHP extensions:</li>
                <ul>
                    <li>php-gd</li>
                    <li>php-hash</li>
                    <li>php-json</li>
                    <li>php-mbstring</li>
                    <li>php-mcrypt (<a href="http://aryo.lecture.ub.ac.id/easy-install-php-mcrypt-extension-on-ubuntu-linux/" class="ext">How-To</a>)</li>
                    <li>php-mysqli</li>
                    <li>php-openssl</li>
                    <li>php-recode</li>
                    <li>php-xmlrpc</li>
                    <li>php-zlib</li>
                </ul>
            </ul>
        </li>
        <li>and a modern and up-to-date web browser.</li>
    </ul>

    <div class="alert alert-danger">
        <p>Please notice that PHP 5.5 is no longer supported and should not be used anymore for producton environments!</p>
    </div>

    <?php
    $article_pagination = array(
            'next' => array(
                    'url' => '/en/1.0/getting-started/installation',
                    'title' => 'Installation',
                    'type' => 'article'
            )
    );
    ?>

@stop
