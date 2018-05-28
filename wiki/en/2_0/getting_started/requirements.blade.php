@extends('layouts.master')

@section('title')
    Requirements
@endsection

@section('content')

    <h2 class="page-title">Requirements</h2>

    <p>
        InvoicePlane is web-based software, so to install and use it, you must have a server environment of some sort. Please review the minimum requirements below to determine whether or not you will be able to install and use the software.
    </p>

    <ul>
        <li>A web server of some sort - Apache, nginx, etc.</li>
        <li>PHP >= 7.0.0</li>
        <li>OpenSSL PHP Extension</li>
        <li>PDO PHP Extension</li>
        <li>Mbstring PHP Extension</li>
        <li>Tokenizer PHP Extension</li>
        <li>XML PHP Extension</li>
        <li>DOM PHP Extension</li>
        <li>iconv PHP Extension</li>
        <li>Fileinfo PHP Extension (only if using the data import module)</li>
        <li>MySQL or MariaDB</li>
        <li>A modern and updated web browser</li>
    </ul>

@stop
