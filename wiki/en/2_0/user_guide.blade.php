@extends('layouts.master')

@section('title')
    User Guide
@endsection

@section('content')

    <h2 class="page-title">User Guide</h2>

    <ul>
        <li><a href="{{ url('en/2.0/user-guide/clients') }}">Clients</a></li>
        <li><a href="{{ url('en/2.0/user-guide/quotes') }}">Quotes</a></li>
        <li><a href="{{ url('en/2.0/user-guide/invoices') }}">Invoices</a></li>
        <li><a href="{{ url('en/2.0/user-guide/recurring-invoices') }}">Recurring Invoices</a></li>
        <li><a href="{{ url('en/2.0/user-guide/payments') }}">Payments</a></li>
        <li><a href="{{ url('en/2.0/user-guide/expenses') }}">Expenses</a></li>
        <li><a href="{{ url('en/2.0/user-guide/system-settings') }}">System Settings</a></li>
    </ul>

@stop