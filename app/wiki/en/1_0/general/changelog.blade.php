@extends('layouts.master')

@section('content')

<h2>Changelog</h2>

<div class="changelog">

    <div class="alert alert-info">Click on an older version to show the detailed changelog.</div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v110">
            v1.1.0 <span class="released">released 11/09/2014</span>
        </div>
        <div id="v110" class="panel-body collapse in">
            <p>New Features</p>
            <ul>
                <li>Check for new updates added to the system settings</li>
                <li>You can set a default subject for email templates now</li>
                <li>VAT ID / tax code functionality added</li>
                <li>Password reset from login screen</li>
                <li>IP will remember your login for a longer time now</li>
                <li>Custom.css added for your own styles</li>
            </ul>

            <p>Enhancements</p>
            <ul>
                <li>Invoice / quote amounts can now be higher (eg. 1.000.000.000)</li>
                <li>.gitignore for better development added</li>
                <li>Dashboard invoice / quote overview layout changed</li>
                <li>PDF engine updated to latest version</li>
                <li>Some smaller UI changes</li>
            </ul>

            <p>Bugs</p>
            <ul>
                <li>Alert messages on login screen fixed</li>
                <li>Layout issues on pdf templates fixed</li>
                <li>Invoice save bug fixed</li>
                <li>Add quote tax button fixed</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v102">
            v1.0.2 <span class="released">released 08/28/2014</span>
        </div>
        <div id="v102" class="panel-body collapse">
            <p>Bugs</p>
            <ul>
                <li>Hotfix release for issues with tax rates and sum in quotes and invoices.</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v101">
            v1.0.1 <span class="released">released 08/23/2014</span>
        </div>
        <div id="v101" class="panel-body collapse">
            <p>General</p>
            <ul>
                <li>Ping question after the setup removed</li>
            </ul>

            <p>Enhancements</p>
            <ul>
                <li>Adjust the alert box margins</li>
                <li>Padding of panels with tables should be removed</li>
                <li>Guest link shows blank page</li>
                <li>Show date picker on Invoice/Quotes page</li>
                <li>Padding of panels with tables should be removed</li>
                <li>Incorrect table row alignment</li>
                <li>Datepicker icon is misaligned</li>
                <li>Fix Datepicker dropdown padding</li>
                <li>Some smaller UI improvements</li>
            </ul>

            <p>Bugs</p>
            <ul>
                <li>Table on the Clients page is not responsive + 'Options' menu is cut off</li>
                <li>Make 'Login Logo' responsive when img is wider than panel</li>
                <li>Function json_errors() from Quotes</li>
                <li>Form error handling not working properly</li>
                <li>SQL errors while adding custom fields</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v102">
            v1.0.0 <span class="released">released 07/12/2014</span>
        </div>
        <div id="v100" class="panel-body collapse">
            <p>Initial version</p>
        </div>
    </div>

</div>

@stop