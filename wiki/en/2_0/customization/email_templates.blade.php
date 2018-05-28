@extends('layouts.master')

@section('title')
    Email Templates
@endsection

@section('content')

    <h2 class="page-title">Email Templates</h2>

    <ul>
        <li><a href="#what-are-email-templates">What are email templates?</a></li>
        <li><a href="#quote-email-template">Quote Email Templates</a></li>
        <li><a href="#invoice-email-template">Invoice Email Templates</a></li>
        <li><a href="#payment-receipt-email-template">Payment Receipt Email Templates</a></li>
    </ul>

    <hr>

    <span class="anchor" id="what-are-email-templates"></span>
    <h3>What are email templates?</h3>

    <p>
        Email templates allow customization of email sent from InvoicePlane. The templates are located in
        System Settings
        on the Email tab and can contain HTML and a number of dynamic variables which will be replaced with the
        appropriate
        values when the email is sent.
    </p>

    <hr>

    <span class="anchor" id="quote-email-template"></span>
    <h3>Quote Email Template</h3>

    <p>The variables listed below can be used in the following fields in System Settings on the Email tab:</p>

    <ul>
        <li><strong>Quote Email Subject</strong></li>
        <li><strong>Default Quote Email Body</strong></li>
        <li><strong>Quote Approved Email Body</strong></li>
        <li><strong>Quote Rejected Email Body</strong></li>
    </ul>

    <ul>
        <li><strong>Quote Information</strong>
            <ul>
                <li>Issue Date: &#123;&#123; $quote->formatted_created_at &#125;&#125;</li>
                <li>Expiration Date: &#123;&#123; $quote->formatted_expires_at &#125;&#125;</li>
                <li>Number: &#123;&#123; $quote->number &#125;&#125;</li>
                <li>Status: &#123;&#123; $quote->status_text &#125;&#125;</li>
                <li>Summary: &#123;&#123; $quote->summary &#125;&#125;</li>
                <li>Public URL: &#123;&#123; $quote->public_url &#125;&#125;</li>
                <li>Terms: &#123;&#123; $quote->formatted_terms &#125;&#125;</li>
                <li>Footer: &#123;&#123; $quote->formatted_footer &#125;&#125;</li>
                <li>Total Amount: &#123;&#123; $quote->amount->formatted_total &#125;&#125;</li>
            </ul>
        </li>
        <li><strong>Client Information</strong>
            <ul>
                <li>Name: &#123;&#123; $quote->client->name &#125;&#125;</li>
                <li>Address: &#123;&#123; $quote->client->formatted_address &#125;&#125;</li>
                <li>Phone: &#123;&#123; $quote->client->phone &#125;&#125;</li>
                <li>Fax: &#123;&#123; $quote->client->fax &#125;&#125;</li>
                <li>Mobile: &#123;&#123; $quote->client->mobile &#125;&#125;</li>
                <li>Email: &#123;&#123; $quote->client->email &#125;&#125;</li>
                <li>Website: &#123;&#123; $quote->client->web &#125;&#125;</li>
            </ul>
        </li>
        <li><strong>User Account Information</strong>
            <ul>

                <li>Name: &#123;&#123; $quote->user->name &#125;&#125;</li>
                <li>Company: &#123;&#123; $quote->companyProfile->company &#125;&#125;</li>
                <li>Address: &#123;&#123; $quote->user->formatted_address &#125;&#125;</li>
                <li>Phone: &#123;&#123; $quote->user->phone &#125;&#125;</li>
                <li>Fax: &#123;&#123; $quote->user->fax &#125;&#125;</li>
                <li>Mobile: &#123;&#123; $quote->user->mobile &#125;&#125;</li>
                <li>Website: &#123;&#123; $quote->user->web &#125;&#125;</li>
            </ul>
        </li>
    </ul>

    <p>Example Subject:</p>

    <div class="card card-body">
        Quote #&#123;&#123; $quote-&gt;number &#125;&#125;
    </div>

    <br>

    <p>Example Body:</p>

    <div class="card card-body">
        &lt;p&gt;To view your quote from &#123;&#123; $quote-&gt;user-&gt;name &#125;&#125; for &#123;&#123; $quote-&gt;amount-&gt;formatted_total
        &#125;&#125;, click the link below:&lt;/p&gt;<br/>
        <br/>
        &lt;p&gt;&lt;a href=&quot;&#123;&#123; $quote-&gt;public_url &#125;&#125;&quot;&gt;&#123;&#123; $quote-&gt;public_url
        &#125;&#125;&lt;/a&gt;&lt;/p&gt;
    </div>

    <hr>

    <span class="anchor" id="invoice-email-template"></span>
    <h3>Invoice Email Template</h3>

    <p>The variables listed below can be used in the following fields in System Settings on the Email tab:</p>

    <ul>
        <li><strong>Invoice Email Subject</strong></li>
        <li><strong>Default Invoice Email Body</strong></li>
        <li><strong>Overdue Email Subject</strong></li>
        <li><strong>Default Overdue Invoice Email Body</strong></li>
        <li><strong>Upcoming Payment Notice Email Subject</strong></li>
        <li><strong>Upcoming Payment Notice Email Body</strong></li>
    </ul>

    <ul>
        <li><strong>Invoice Information</strong>
            <ul>
                <li>Issue Date: &#123;&#123; $invoice->formatted_created_at &#125;&#125;</li>
                <li>Due Date: &#123;&#123; $invoice->formatted_due_at &#125;&#125;</li>
                <li>Number: &#123;&#123; $invoice->number &#125;&#125;</li>
                <li>Status: &#123;&#123; $invoice->status_text &#125;&#125;</li>
                <li>Summary: &#123;&#123; $invoice->summary &#125;&#125;</li>
                <li>Public URL: &#123;&#123; $invoice->public_url &#125;&#125;</li>
                <li>Terms: &#123;&#123; $invoice->formatted_terms &#125;&#125;</li>
                <li>Footer: &#123;&#123; $invoice->formatted_footer &#125;&#125;</li>
                <li>Total Amount: &#123;&#123; $invoice->amount->formatted_total &#125;&#125;</li>
                <li>Amount Paid: &#123;&#123; $invoice->amount->formatted_paid &#125;&#125;</li>
                <li>Balance: &#123;&#123; $invoice->amount->formatted_balance &#125;&#125;</li>
            </ul>
        </li>
        <li><strong>Client Information</strong>
            <ul>
                <li>Name: &#123;&#123; $invoice->client->name &#125;&#125;</li>
                <li>Address: &#123;&#123; $invoice->client->formatted_address &#125;&#125;</li>
                <li>Phone: &#123;&#123; $invoice->client->phone &#125;&#125;</li>
                <li>Fax: &#123;&#123; $invoice->client->fax &#125;&#125;</li>
                <li>Mobile: &#123;&#123; $invoice->client->mobile &#125;&#125;</li>
                <li>Email: &#123;&#123; $invoice->client->email &#125;&#125;</li>
                <li>Website: &#123;&#123; $invoice->client->web &#125;&#125;</li>
            </ul>
        </li>
        <li><strong>User Account Information</strong>
            <ul>
                <li>Name: &#123;&#123; $invoice->user->name &#125;&#125;</li>
                <li>Company: &#123;&#123; $invoice->companyProfile->company &#125;&#125;</li>
                <li>Address: &#123;&#123; $invoice->user->formatted_address &#125;&#125;</li>
                <li>Phone: &#123;&#123; $invoice->user->phone &#125;&#125;</li>
                <li>Fax: &#123;&#123; $invoice->user->fax &#125;&#125;</li>
                <li>Mobile: &#123;&#123; $invoice->user->mobile &#125;&#125;</li>
                <li>Website: &#123;&#123; $invoice->user->web &#125;&#125;</li>
            </ul>
        </li>
    </ul>

    <p>Example Subject:</p>

    <div class="card card-body">
        Invoice #&#123;&#123; $invoice-&gt;number &#125;&#125;
    </div>

    <br>

    <p>Example Body:</p>

    <div class="card card-body">
        &lt;p&gt;To view your invoice from &#123;&#123; $invoice-&gt;user-&gt;name &#125;&#125; for &#123;&#123;
        $invoice-&gt;amount-&gt;formatted_total
        &#125;&#125;, click the link below:&lt;/p&gt;<br/>
        <br/>
        &lt;p&gt;&lt;a href=&quot;&#123;&#123; $invoice-&gt;public_url &#125;&#125;&quot;&gt;&#123;&#123; $invoice-&gt;public_url
        &#125;&#125;&lt;/a&gt;&lt;/p&gt;<br/>
        <br/>
        &lt;p&gt;&#123;&#123; $invoice-&gt;user-&gt;formatted_address &#125;&#125;&lt;/p&gt;
    </div>

    <hr>

    <span class="anchor" id="payment-receipt-email-template"></span>
    <h3>Payment Receipt Email Template</h3>

    <p>The variables listed below can be used in the following fields in System Settings on the Email tab:</p>

    <ul>
        <li><strong>Payment Receipt Email Subject</strong></li>
        <li><strong>Default Payment Receipt Body</strong></li>
    </ul>

    <ul>
        <li><strong>Payment Information</strong>
            <ul>
                <li>Payment Date: &#123;&#123; $payment->formatted_paid_at &#125;&#125;</li>
                <li>Payment Amount: &#123;&#123; $payment->formatted_amount &#125;&#125;</li>
                <li>Payment Note: &#123;&#123; $payment->formatted_note &#125;&#125;</li>
                <li>Payment Method: &#123;&#123; $payment->paymentMethod->name &#125;&#125;</li>
            </ul>
        </li>
        <li><strong>Invoice Information</strong>
            <ul>
                <li>Issue Date: &#123;&#123; $payment->invoice->formatted_created_at &#125;&#125;</li>
                <li>Due Date: &#123;&#123; $payment->invoice->formatted_due_at &#125;&#125;</li>
                <li>Number: &#123;&#123; $payment->invoice->number &#125;&#125;</li>
                <li>Status: &#123;&#123; $payment->invoice->status_text &#125;&#125;</li>
                <li>Summary: &#123;&#123; $payment->invoice->summary &#125;&#125;</li>
                <li>Public URL: &#123;&#123; $payment->invoice->public_url &#125;&#125;</li>
                <li>Terms: &#123;&#123; $payment->invoice->formatted_terms &#125;&#125;</li>
                <li>Footer: &#123;&#123; $payment->invoice->formatted_footer &#125;&#125;</li>
                <li>Total Amount: &#123;&#123; $payment->invoice->amount->formatted_total &#125;&#125;</li>
                <li>Amount Paid: &#123;&#123; $payment->invoice->amount->formatted_paid &#125;&#125;</li>
                <li>Balance: &#123;&#123; $payment->invoice->amount->formatted_balance &#125;&#125;</li>
            </ul>
        </li>
        <li><strong>Client Information</strong>
            <ul>
                <li>Name: &#123;&#123; $payment->invoice->client->name &#125;&#125;</li>
                <li>Address: &#123;&#123; $payment->invoice->client->formatted_address &#125;&#125;</li>
                <li>Phone: &#123;&#123; $payment->invoice->client->phone &#125;&#125;</li>
                <li>Fax: &#123;&#123; $payment->invoice->client->fax &#125;&#125;</li>
                <li>Mobile: &#123;&#123; $payment->invoice->client->mobile &#125;&#125;</li>
                <li>Email: &#123;&#123; $payment->invoice->client->email &#125;&#125;</li>
                <li>Website: &#123;&#123; $payment->invoice->client->web &#125;&#125;</li>
            </ul>
        </li>
        <li><strong>User Account Information</strong>
            <ul>
                <li>Name: &#123;&#123; $payment->invoice->user->name &#125;&#125;</li>
                <li>Company: &#123;&#123; $payment->invoice->companyProfile->company &#125;&#125;</li>
                <li>Address: &#123;&#123; $payment->invoice->user->formatted_address &#125;&#125;</li>
                <li>Phone: &#123;&#123; $payment->invoice->user->phone &#125;&#125;</li>
                <li>Fax: &#123;&#123; $payment->invoice->user->fax &#125;&#125;</li>
                <li>Mobile: &#123;&#123; $payment->invoice->user->mobile &#125;&#125;</li>
                <li>Website: &#123;&#123; $payment->invoice->user->web &#125;&#125;</li>
            </ul>
        </li>
    </ul>

    <p>Example Subject:</p>

    <div class="card card-body">
        Payment Receipt for Invoice #&#123;&#123; $payment-&gt;invoice-&gt;number &#125;&#125;
    </div>

    <br>

    <p>Example Body:</p>

    <div class="card card-body">
        &lt;p&gt;Thank you! Your payment of &#123;&#123; $payment-&gt;formatted_amount &#125;&#125; has been applied to
        Invoice #&#123;&#123;
        $payment-&gt;invoice-&gt;number &#125;&#125;.&lt;/p&gt;
    </div>

@endsection
