@extends('layouts.master')

@section('title')
    About InvoicePlane
@endsection

@section('content')

    <h2 class="page-title">About InvoicePlane</h2>

    <div class="alert alert-info text-center">
        <p class="mt-2 mb-2">
            InvoicePlane is a self-hosted open source application for managing your quotes, invoices, clients and
            payments.<br>
            The application is the official successor of the FusionInvoice 2018 software and is based on it's code.
        </p>
    </div>

    <div id="features" class="mt-5">
        <div class="row">

            <div class="col text-center  mb-4">
                <div class="card card-body" style="height: 100%;">
                    <i class="fa fa-3x fa-dollar text-primary mb-2"></i>

                    <h3>Quotes, Invoices, Payments</h3>

                    <p>InvoicePlane is a solid app to manage your complete billing circle: from quotes over invoices to
                        payments.</p>
                </div>
            </div>

            <div class="col text-center  mb-4">
                <div class="card card-body" style="height: 100%;">
                    <i class="fa fa-3x fa-users text-primary mb-2"></i>

                    <h3>Manage your Clients</h3>

                    <p>The application provides CRM-like management for your clients. Enter contact details, notes or add custom fields.</p>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col text-center mb-4">
                <div class="card card-body" style="height: 100%;">
                    <i class="fa fa-3x fa-cogs text-primary mb-2"></i>

                    <h3>Customize InvoicePlane</h3>

                    <p>You can customize InvoicePlane to make sure it fits your needs: amount formats, email and PDF templates and many more.</p>
                </div>
            </div>

            <div class="col text-center mb-4">
                <div class="card card-body" style="height: 100%;">
                    <i class="fa fa-3x fa-credit-card text-primary mb-2"></i>

                    <h3>One-Click Online Payments</h3>

                    <p>Let your clients use PayPal to pay the invoices. Online, with just one simple click.</p>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col text-center mb-4">
                <div class="card card-body" style="height: 100%;">
                    <i class="fa fa-3x fa-globe text-primary mb-2"></i>

                    <h3>Multilanguage Interface</h3>

                    <p>InvoicePlane is fully translated into 23 languages by community members and more languages are coming soon.</p>

                </div>
            </div>

        </div>
    </div>

    <p>
        <a href="https://invoiceplane.com/" class="btn btn-primary">Learn more on InvoicePlane.com</a>
    </p>

@stop