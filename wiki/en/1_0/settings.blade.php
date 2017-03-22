@extends('layouts.master')

@section('title')
    Settings
@endsection

@section('content')

<h2 class="page-title">Settings</h2>

<ul>
    <li>
        <a href="/en/1.0/settings/general">General Settings</a>
    </li>
    <li>
        <a href="/en/1.0/settings/invoices">Invoice Settings</a>
    </li>
    <li>
        <a href="/en/1.0/settings/quotes">Quotes Settings</a>
    </li>
    <li>
        <a href="/en/1.0/settings/taxes">Tax Settings</a>
    </li>
    <li>
        <a href="/en/1.0/settings/email">eMail Settings</a>
    </li>
    <li>
        <a href="/en/1.0/settings/online-payments">Online Payments</a>
    </li>
    <li>
        <a href="/en/1.0/settings/updatecheck">Updatecheck</a>
    </li>
    <li>
        <a href="/en/1.0/settings/custom-fields">Custom Fields</a>
    </li>
    <li>
        <a href="/en/1.0/settings/email-templates">eMail Templates</a>
    </li>
    <li>
        <a href="/en/1.0/settings/invoice-groups">Invoice Groups</a>
    </li>
    <li>
        <a href="/en/1.0/settings/payment-methods">Payment Methods</a>
    </li>
    <li>
        <a href="/en/1.0/settings/taxrates">Taxrates</a>
    </li>
    <li>
        <a href="/en/1.0/settings/user-accounts">User Accounts</a>
    </li>
</ul>

@stop