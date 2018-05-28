@extends('layouts.master')

@section('title')
    Changelog
@endsection

@section('content')

    <h2 class="page-title">Changelog</h2>

    <div class="changelog">

        <div class="alert alert-info">Click on an older version to show the detailed changelog.</div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v200-a1">
                2.0.0 Alpha 1 <span class="released">released 2018-05-29</span>
            </div>
            <div id="v200-a1" class="card-body collapse show">
                Import of the FusionInvoice 2018-8 codebase and initial changes to make the application ready for the alpha release.
            </div>
        </div>

    </div>

@stop