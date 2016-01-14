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
                <li>PHP > 5.3.0</li>
                <li>MySQL > 4.x</li>
                <li>mCrypt Extension activated (<a
                            href="http://aryo.lecture.ub.ac.id/easy-install-php-mcrypt-extension-on-ubuntu-linux/"
                            class="ext">How-To</a>)
                </li>
            </ul>
        </li>
        <li>and a modern and up-to-date web browser.</li>
    </ul>

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