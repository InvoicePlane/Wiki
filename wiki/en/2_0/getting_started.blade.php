@extends('layouts.master')

@section('title')
    Getting started
@endsection

@section('content')

    <h2 class="page-title">Getting started</h2>

    <ul>
        <li><a href="{{ url('en/2.0/getting-started/requirements') }}">Requirements</a></li>
        <li><a href="{{ url('en/2.0/getting-started/installation') }}">Installation</a></li>
        <li><a href="{{ url('en/2.0/getting-started/task-scheduler') }}">Task Scheduler</a></li>
        <li><a href="{{ url('en/2.0/getting-started/updating-ip') }}">Updating InvoicePlane</a></li>
    </ul>

@stop