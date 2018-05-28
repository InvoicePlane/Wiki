@extends('layouts.master')

@section('title')
    About InvoicePlane
@endsection

@section('content')

    <h2 class="page-title">About InvoicePlane</h2>

    <ul>
        <li><a href="{{ url('en/2.0/general/about') }}">What is InvoicePlane?</a></li>
        <li><a href="{{ url('en/2.0/general/changelog') }}">Changelog</a></li>
        <li><a href="{{ url('en/2.0/general/license') }}">License</a></li>
        <li><a href="{{ url('en/2.0/general/faq') }}">FAQ</a></li>
    </ul>

@stop