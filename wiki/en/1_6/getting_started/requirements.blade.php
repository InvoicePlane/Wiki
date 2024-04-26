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
                <li>Apache >= 2.4 or Ngnix >=1.20.0
                <li>PHP >= 8.0 and =< 8.1</li>
                <li>
                    The following PHP extensions must be installed and activated:
                    <ul>
                        <li>php-bcmath</li>
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
            An up-to-date web browser. We do recommend using either <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank">Firefox</a>, <a href="https://www.microsoft.com/en-us/edge" target="_blank">Microsoft Edge</a>, the latest version of
            <a href="https://www.apple.com/safari" target="_blank">Safari</a> or any of the other leading browsers around the internet. Please note that since Microsoft introduced <a href="https://www.microsoft.com/en-us/edge" target="_blank">Microsoft Edge</a>, Internet Explorer is not supported anymore.
        </li>
    </ul>

    <div class="alert alert-warning">
        Please notice that PHP < 8 is no longer supported and should <b>not</b> be used anymore for producton
        environments! (see <a href="https://www.php.net/supported-versions.php" target="_blank">php version support</a> for more information)
    </div>

    <?php
    $article_pagination = array(
        'next' => array(
            'url' => '/en/1.6/getting-started/installation',
            'title' => 'Installation',
            'type' => 'article'
        )
    );
    ?>

@stop
