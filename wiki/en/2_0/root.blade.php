@extends('layouts.master')

@section('title')
    InvoicePlane 2 Wiki
@endsection

@section('content')

    <h1>
        <img src="{{ asset('assets/img/logo.svg') }}" alt="InvoicePlane" width="300px">
        <span class="sr-only">InvoicePlane 2 Wiki</span>
    </h1>

    <div class="jumbotron">
        <h2>Welcome to the InvoicePlane 2 Wiki</h2>
        <p class="lead">
            If you want to know how to use InvoicePlane or if you have any
            questions take a look at this wiki. You should find a lot of useful information about the software and each module.
        </p>

    </div>

    <h2>About InvoicePlane</h2>

    <ul>
        <li><a href="{{ url('en/2.0/general/about') }}">What is InvoicePlane?</a></li>
        <li><a href="{{ url('en/2.0/general/changelog') }}">Changelog</a></li>
        <li><a href="{{ url('en/2.0/general/license') }}">License</a></li>
        <li><a href="{{ url('en/2.0/general/faq') }}">FAQ</a></li>
    </ul>

    <h2>Getting started</h2>

    <ul>
        <li><a href="{{ url('en/2.0/getting-started/requirements') }}">Requirements</a></li>
        <li><a href="{{ url('en/2.0/getting-started/installation') }}">Installation</a></li>
        <li><a href="{{ url('en/2.0/getting-started/task-scheduler') }}">Task Scheduler</a></li>
        <li><a href="{{ url('en/2.0/getting-started/updating-ip') }}">Updating InvoicePlane</a></li>
    </ul>

    <h2>User Guide</h2>

    <ul>
        <li><a href="{{ url('en/2.0/user-guide/clients') }}">Clients</a></li>
        <li><a href="{{ url('en/2.0/user-guide/quotes') }}">Quotes</a></li>
        <li><a href="{{ url('en/2.0/user-guide/invoices') }}">Invoices</a></li>
        <li><a href="{{ url('en/2.0/user-guide/recurring-invoices') }}">Recurring Invoices</a></li>
        <li><a href="{{ url('en/2.0/user-guide/payments') }}">Payments</a></li>
        <li><a href="{{ url('en/2.0/user-guide/expenses') }}">Expenses</a></li>
        <li><a href="{{ url('en/2.0/user-guide/system-settings') }}">System Settings</a></li>
    </ul>

    <h2>Customization</h2>

    <ul>
        <li><a href="{{ url('en/2.0/customization/custom-fields') }}">Custom Fields</a></li>
        <li><a href="{{ url('en/2.0/customization/email-templates') }}">Email Templates</a></li>
        <li><a href="{{ url('en/2.0/customization/invoice-templates') }}">Invoice Templates</a></li>
        <li><a href="{{ url('en/2.0/customization/translations') }}">Translations</a></li>
    </ul>

    <h2>Add-Ons</h2>

    <ul>
        <li><a href="{{ url('en/2.0/add-ons/time-tracking') }}">Time Tracking</a></li>
    </ul>

@stop