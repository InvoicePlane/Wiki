@extends('layouts.master')

@section('title')
    Customization
@endsection

@section('content')

    <h2 class="page-title">Customization</h2>

    <ul>
        <li><a href="{{ url('en/2.0/customization/custom-fields') }}">Custom Fields</a></li>
        <li><a href="{{ url('en/2.0/customization/email-templates') }}">Email Templates</a></li>
        <li><a href="{{ url('en/2.0/customization/invoice-templates') }}">Invoice Templates</a></li>
        <li><a href="{{ url('en/2.0/customization/translations') }}">Translations</a></li>
    </ul>

@stop