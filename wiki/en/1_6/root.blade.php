@extends('layouts.master')

@section('title')
    InvoicePlane Wiki
@endsection

@section('content')

    <h1 class="mb-4">
        <img src="{{ asset('assets/img/logo.svg') }}" alt="InvoicePlane" width="300px">
        <span class="sr-only">InvoicePlane Wiki</span>
    </h1>

    <div class="jumbotron">
        <h2>Welcome to the InvoicePlane Wiki</h2>
        <p class="lead mb-0">
            If you want to know how to use InvoicePlane or if you have any
            questions take a look at this wiki. You should find a lot of useful information about the software and each
            module.
        </p>
    </div>

    <h2>About InvoicePlane</h2>

    <ul>
        <li><a href="{{ url('en/1.6/general/about') }}">What is InvoicePlane?</a></li>
        <li><a href="{{ url('en/1.6/general/changelog') }}">Changelog</a></li>
        <li><a href="{{ url('en/1.6/general/license') }}">License</a></li>
        <li><a href="{{ url('en/1.6/general/faq') }}">FAQ</a></li>
    </ul>

    <h2>Getting started</h2>

    <ul>
        <li><a href="{{ url('en/1.6/getting-started/requirements') }}">Requirements</a></li>
        <li><a href="{{ url('en/1.6/getting-started/installation') }}">Installation</a></li>
        <li><a href="{{ url('en/1.6/getting-started/quickstart') }}">Quickstart (Tutorial)</a></li>
        <li><a href="{{ url('en/1.6/getting-started/updating-ip') }}">Updating InvoicePlane</a></li>
    </ul>

    <h2>Modules</h2>

    <ul>
        <li><a href="{{ url('en/1.6/modules/clients') }}">Clients</a></li>
        <li><a href="{{ url('en/1.6/modules/quotes') }}">Quotes</a></li>
        <li><a href="{{ url('en/1.6/modules/invoices') }}">Invoices</a></li>
        <li><a href="{{ url('en/1.6/modules/recurring-invoices') }}">Recurring Invoices</a></li>
        <li><a href="{{ url('en/1.6/modules/payments') }}">Payments</a></li>
    </ul>

    <h2>Settings</h2>

    <ul>
        <li><a href="{{ url('en/1.6/settings/general') }}">General Settings</a></li>
        <li><a href="{{ url('en/1.6/settings/invoices') }}">Invoice Settings</a></li>
        <li><a href="{{ url('en/1.6/settings/quotes') }}">Quotes Settings</a></li>
        <li><a href="{{ url('en/1.6/settings/taxes') }}">Tax Settings</a></li>
        <li><a href="{{ url('en/1.6/settings/email') }}">eMail Settings</a></li>
        <li><a href="{{ url('en/1.6/settings/online-payments') }}">Online Payments</a></li>
        <li><a href="{{ url('en/1.6/settings/updatecheck') }}">Updatecheck</a></li>
        <li><a href="{{ url('en/1.6/settings/custom-fields') }}">Custom Fields</a></li>
        <li><a href="{{ url('en/1.6/settings/email-templates') }}">eMail Templates</a></li>
        <li><a href="{{ url('en/1.6/settings/invoice-groups') }}">Invoice Groups</a></li>
        <li><a href="{{ url('en/1.6/settings/payment-methods') }}">Payment Methods</a></li>
        <li><a href="{{ url('en/1.6/settings/taxrates') }}">Taxrates</a></li>
        <li><a href="{{ url('en/1.6/settings/user-accounts') }}">User Accounts</a></li>
    </ul>

    <h2>Templates</h2>

    <ul>
        <li><a href="{{ url('en/1.6/templates/using-templates') }}">Using Templates</a></li>
        <li><a href="{{ url('en/1.6/templates/customize-templates') }}">Customize Templates</a></li>
    </ul>

    <h2>System</h2>

    <ul>
        <li><a href="{{ url('en/1.6/system/translation-localization') }}">Translation / Localization</a></li>
        <li><a href="{{ url('en/1.6/system/importing-data') }}">Importing Data</a></li>
        <li><a href="{{ url('en/1.6/system/upgrade-from-fusioninvoice') }}">Upgrade from FusionInvoice</a></li>
    </ul>

@stop
