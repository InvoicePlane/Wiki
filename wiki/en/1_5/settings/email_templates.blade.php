@extends('layouts.master')

@section('title')
    Email Templates
@endsection

@section('content')

    <h2 class="page-title">Email Templates</h2>

    <p>Instead of having to type the body of an email each time an invoice or quote is emailed from InvoicePlane, email templates can be customized to your liking, giving you a set of predefined templates to choose from.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_email_templates.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_email_templates.jpg">
        </a>
    </p>

    <h3 id="add">
        Creating an Email Template <?= IP::headlineLink('/en/1.5/settings/email-templates#add'); ?>
    </h3>

    <p>To create a new email template, click the settings icon <code><i class="fa fa-cogs"></i></code> near the right hand side of the main menu, select <code>Email Templates</code>, and click the <code>New</code> button near the top right of the page.</p>

    <p>
        <a href="//invoiceplane.com/content/screenshots/web/ip_email_templates.jpg" rel="lightbox">
            <img src="//invoiceplane.com/content/screenshots/web_thumb/ip_email_templates.jpg">
        </a>
    </p>

    <p>Template variables can be inserted into the body of your email by clicking the name of the variable to include from the list below the form. The example above shows what an email template for a new invoice might look like.</p>

    <h3 id="default-templates">
        Setting Default Email Templates <?= IP::headlineLink('/en/1.5/settings/email-templates#default-templates'); ?>
    </h3>

    <p>To access the settings for your default templates, click the settings icon <code><i class="fa fa-cogs"></i></code>, select <code>System Settings</code>, and choose either the <code>Invoices</code> or the <code>Quotes</code> tab</p>

    <p><b>Invoices</b></p>

    <ul>
        <li>Default Email Template - The selected template would be used for invoices in draft, sent and viewed statuses.</li>
        <li>Paid Email Template - The selected template would be used for invoices in paid status.</li>
        <li>Overdue Email Template - The selected template would be used for invoices which are overdue.</li>
    </ul>

    <p><b>Quotes</b></p>
    <ul>
        <li>Default Email Template - The selected template would be used for all quotes in any status.</li>
        <li>Paid Email Template - The selected template would be used for invoices in paid status.</li>
        <li>Overdue Email Template - The selected template would be used for invoices which are overdue.</li>
    </ul>

    <p>When manually sending an invoice or quote from within InvoicePlane, the appropriate email template will be selected prior to sending. Of course, you may make any last minute adjustments to the content of the email before sending it. Since recurring invoices send email on their own without any manual intervention, it is helpful to have a set of email templates created and the default settings configured so InvoicePlane knows which template to use each time it sends them out.</p>

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.5/settings/custom-fields',
                    'title' => 'Custom Fields',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.5/settings/invoice-groups',
                    'title' => 'Invoicegroups',
                    'type' => 'article'
            )
    );
    ?>

@stop
