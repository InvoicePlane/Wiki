@extends('layouts.master')

@section('title')
    Changelog
@endsection

@section('content')

    <h2 class="page-title">Changelog</h2>

    <div class="changelog">
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v160">
                v1.6.0 <span class="released">released 2022-12-04</span>
            </div>
            <div id="v160" class="card-body collapse show">
                <p>Changes</p>
                <ul>
                    <li>[IP-798]: Prepare for PHP 8.1 compatibility release by @vtq221, @Ordissimo and of course @naui95 in #831</li>
                    <li>fix to CVE-2021-29024 #735 by @naui95 in #754</li>
                    <li>Don't show upload-path by @zeitschlag in #739</li>
                    <li>fix for CVE-2021-29023 #733 by @naui95 in #767</li>
                    <li>Fix for outdated card data handling #814 by @naui95 in #816</li>
                    <li>Trivial typo fix by @pimvanpelt in #788</li>
                    <li>Fix bug with recurring invoices dropping discounts by @pimvanpelt in #791</li>
                    <li>Fix Payment Method Select by @tridnguyen in #805</li>
                    <li>Escape client name for PDF generation (Only in Zugferd invoices) by @Forceu in #810</li>
                    <li>[IP-711] Add responsive view for invoices/quotes by @nielsdrost7 in #783</li>
                    <li>fix minor flaws in quotes itemlist view by @der-peer in #787</li>
                    <li>Develop by @yvesmethz in #774</li>
                    <li>Display $client surname for recurring invoices by @giacy86 in #811</li>
                    <li>Select appropriate pdf template for guest users by @giacy86 in #765</li>
                    <li>update composer and javascript packages by @nielsdrost7 in #822</li>
                    <li>Create SECURITY.md by @zidingz in #752</li>
                    <li>Update composer and javascript packages by @nielsdrost7 in #776</li>
                    <li>Create SECURITY.md by @dagelf in #797</li>
                    <li>Quick bugfix with a nullable value</li>
                    <li>Fix in the npm packages to make the yarn build work</li>
                </ul>
                <p>You can find the full changelog with references to the code at <a href="https://github.com/InvoicePlane/InvoicePlane/releases/tag/v1.6.0" target="_blank">this link</a>.</p>
            </div>
        </div>
        <div class="alert alert-warning">
            <p>Changelogs concerning <b>older versions</b> of InvoicePlane can be found in the relevant section of the given version.</p>
        </div>
    </div>
@stop