@extends('layouts.master')

@section('title')
    FAQ - Frequently Asked Questions
@endsection

@section('content')

    <h2 class="page-title">FAQ - Frequently Asked Questions</h2>

    <div id="faq">

        <div id="general01" class="card">
            <div class="card-header">
                Can I sell / redistribute InvoicePlane? <?php IP::headlineLink('/en/1.0/general/faq#general01'); ?>
            </div>
            <div class="card-body">
                <p class="text-success">InvoicePlane is a free software and it will never be a commercial product! We
                    appeal everyone to respect the open source InvoicePlane project and our work and refrain from
                    selling the application as their own product!<br/>
                    What you can do: offer paid professional support or hosting for InvoicePlane.</p>
                <p>However InvoicePlane is an open source software released under <a
                            href="http://choosealicense.com/licenses/mit/">MIT license</a>. This means that you can use
                    the code <em>but</em> the InvoicePlane name and the logo are copyright by Invoiceplane.com and
                    Kovah.de<br/>
                    <span class="text-danger">This means you <b>have to</b> use another name and logo for the product and include the original InvoicePlane license in the code</span>.
                </p>

                <p>For more information about licensing please visit the <a
                            href="https://invoiceplane.com/license-copyright">InvoicePlane website</a>.</p>
            </div>
        </div>

        <div id="paidstatuschange" class="card">
            <div class="card-header">
                Why can't I change the status to
                paid? <?php IP::headlineLink('/en/2.0/general/faq#paidstatuschange'); ?>
            </div>
            <div class="card-body">
                The paid status is the only status you cannot manually change an invoice to. To
                change an invoice to Paid status, the
                invoice must have a payment made in full. Once the invoice has no remaining balance,
                the status will automatically
                update to Paid.
            </div>
        </div>

        <div id="recurringinvoices" class="card">
            <div class="card-header">
                Why aren't my recurring invoices
                working? <?php IP::headlineLink('/en/1.0/general/faq#recurringinvoices'); ?>
            </div>
            <div class="card-body">

                <p>First, check the Next Date of the recurring invoice you expect should have generated.</p>

                <a href="/content/docs/2.0/troubleshoot_recurring_invoices.png" target="_blank">
                    <img src="/content/docs/2.0/troubleshoot_recurring_invoices_small.png"
                         class="img-responsive">
                </a>

                <ol>
                    <li>Click Recurring Invoices.</li>
                    <li>The date in the Next Date field indicates the date which this invoice should recur next. If this
                        date is in the
                        future, then the invoice isn't ready to recur yet.
                    </li>
                </ol>

                <p>
                    If the Next Date is today's date or prior to today's date but the recurring invoice hasn't been
                    generated, then the
                    next step would be to visit http://YourInvoicePlaneURL/tasks/run (or
                    http://YourInvoicePlaneURL/index.php/tasks/run if
                    you have to specify index.php in your URL).</p>
                <p>
                    One of two things will happen when you visit this URL in your browser:
                <ol>
                    <li>
                        You'll be greeted by an empty, white page. This is good - if you go back to check your list of
                        recurring
                        invoices, you should find that the Next Date has incremented to the next date in the set
                        frequency.
                        You should
                        also find that the new invoice has appeared in your list of invoices. If this is the case. then
                        the
                        <a href="{{ url('en/2.0/getting-started/task-scheduler') }}">Task Scheduler</a> cron job hasn't
                        been set up or has been set up improperly.
                    </li>
                    <li>
                        You'll be greeted with a lovely, "Whoops..." error message. If this is the case, there will be
                        details logged
                        at the bottom of your storage/logs/laravel.log file. If you are unable to determine the cause of
                        the
                        problem
                        after reviewing the file, email a copy of the log file to support@invoicePlane.com along with a
                        description
                        of the problem you're having.
                    </li>

                </ol>

            </div>
        </div>

        <div id="dashboardamountszero" class="card">
            <div class="card-header">
                Why do the totals on my dashboard all show
                zero? <?php IP::headlineLink('/en/1.0/general/faq#dashboardamountszero'); ?>
            </div>
            <div class="card-body">

                <a href="/content/docs/2.0/faq_dashboard_totals.png" target="_blank">
                    <img src="/content/docs/2.0/faq_dashboard_totals_small.png" class="img-responsive">
                </a>
                <p>
                    There are settings on the Dashboard tab of System Settings which control this behavior for both
                    quotes
                    and invoices.
                    The default option is Year to Date. This can be changed to This Quarter, All Time, or Custom Date
                    Range.</p>

            </div>
        </div>

        <div id="removeindexphp" class="card">
            <div class="card-header">
                How can I remove index.php from my URL? <?php IP::headlineLink('/en/1.0/general/faq#removeindexphp'); ?>
            </div>
            <div class="card-body">

                <b>If you're using Apache, try these things in the order they're listed below:</b>

                <ol>
                    <li>
                        Verify that the .htaccess file distributed in the InvoicePlane download file was actually
                        uploaded
                        to your
                        server. This file should exist in the root folder of your InvoicePlane installation (in the
                        same
                        folder as the
                        index.php file). This file should work out of the box 99% of the time for Apache environments.
                    </li>
                    <li>
                        Make sure the Apache mod_rewrite module is installed and enabled. If you are unsure of how to
                        check
                        for this,
                        contact your web host support or system administrator to ask them.
                    </li>
                    <li>
                        Open the .htaccess file and change this:
                        <pre>RewriteEngine On</pre>
                        to this:
                        <pre>RewriteEngine On
RewriteBase /</pre>
                        If RewriteBase / makes no difference, you can also try:
                        <pre>RewriteEngine On
RewriteBase /TheNameOfYourInvoicePlaneFolder/</pre>
                    </li>
                </ol>

                <b>If you're using nginx:</b>

                <p>Add the following location directive (or change your existing location directive) in your site
                    configuration
                    file:</p>

                <pre>location / {
    try_files $uri $uri/ /index.php?$query_string;
}</pre>

                <b>If you're using IIS:</b>

                <p>Use
                    <a href="http://www.iis.net/learn/extensions/url-rewrite-module/importing-apache-modrewrite-rules">this
                        guide</a> to import the include mod_rewrite rules from the .htaccess file into a web.config file
                    for IIS.</p>

            </div>
        </div>

    </div>

@stop