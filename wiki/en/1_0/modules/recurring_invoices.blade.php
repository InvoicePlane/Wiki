@extends('layouts.master')

@section('title')
    Recurring Invoices
@endsection

@section('content')

    <h2 class="page-title">Recurring Invoices</h2>

    <p>Oftentimes instead of sending an invoice as a one time charge, you need to send an email to a client on a
        schedule. For example, you may be offering web hosting to your clients, and most likely they are paying for your
        services once a month, once a year, etc. It would be a bummer to have to remember to create these invoices every
        month, wouldn't it? InvoicePlane can keep this sorted for you.</p>

    <h3 id="requirements">
        Requirements <?php IP::headlineLink('/en/1.0/modules/recurring-invoices#requirements'); ?>
    </h3>

    <p>For recurring invoices to generate properly, you must create a <a href="/en/1.0/help/setup_cron">CRON job</a> or
        a scheduled task that opens the following URL once per day:</p>

    <pre>http://your-domain.com/invoices/cron/recur/your-cron-key-here</pre>

    <p>Replace <code>your-cron-key-here</code> with the generated cron key in <a href="/en/1.0/settings/general">System
            Settings</a>.</p>

    <h3 id="add-recurring">
        Create a recurring Invoice <?php IP::headlineLink('/en/1.0/modules/recurring-invoices#add-recurring'); ?>
    </h3>

    <p>To create an invoice which will automatically recur at a specific frequency, the first step is to create the
        first invoice and get it sent to your client as you normal would. Once the first invoice has been created, it
        can be set up as a recurring invoice by selecting <code>Create Recurring</code> from the <code>Options</code>
        menu.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_invoices_make_recurring.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_invoices_make_recurring.jpg">
        </a>
    </p>

    <p>The invoice can be set to recur every week, month, year, quarter or six months. Since the first invoice has
        already been created, the start date should be set to the next date this particular invoice should recur on.
        Generally the start date should be a date in the future. If the invoice should stop recurring on a particular
        date, then enter an end date as well. If the invoice should recur perpetually, then leave the end date
        empty.</p>

    <h3 id="view">
        Viewing Recurring Invoices <?php IP::headlineLink('/en/1.0/modules/recurring-invoices#view'); ?>
    </h3>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_invoices_recurring.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_invoices_recurring.jpg">
        </a>
    </p>

    <p>The list of recurring invoices displays each recurring invoice set up in your system. Recurring invoices may be
        stopped or deleted from the <code>Options</code> button in the list of recurring invoices.</p>


    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/modules/invoices',
                    'title' => 'Invoices',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/modules/payments',
                    'title' => 'Payments',
                    'type' => 'article'
            )
    );
    ?>

@stop