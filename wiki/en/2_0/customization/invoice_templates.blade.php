@extends('layouts.master')

@section('title')
    Invoice Templates
@endsection

@section('content')

    <h2 class="page-title">Invoice Templates</h2>

    <ul>
        <li><a href="#customizing-templates">How do I customize my invoice or quote templates?</a></li>
        <li><a href="#adding-custom-fields">How do I make custom fields appear on my invoices or quotes?</a></li>
        <li><a href="#selling-custom-templates">Can I sell my custom templates to other InvoicePlane users?</a></li>
        <li><a href="#changing-logo-display-size">How can I change the size of my logo on invoice and quote
                templates?</a></li>
    </ul>

    <hr>

    <span class="anchor" id="customizing-templates"></span>
    <h3>How do I customize my invoice or quote templates?</h3>

    <p>
        InvoicePlane comes with a copy of the default template placed in the custom templates folder out of the
        box. This
        provides you with a convenient way to start customizing your invoice layout should you wish to. All
        custom templates
        should be placed in either custom/templates/invoice_templates or custom/templates/quote_templates.
    </p>

    <p>Copies of the default templates are available at the following locations to use as starting points:</p>

    <pre>custom/templates/invoice_templates/custom.blade.php
custom/templates/quote_templates/custom.blade.php</pre>

    <p>A few notes about templates:</p>

    <ul>
        <li>All custom templates should be named with a .blade.php file extension.</li>
        <li>The default custom.blade.php files can be edited directly or copied into a new file with a different
            name.
        </li>
        <li>The default custom.blade.php files are provided as a starting point for structure and variable
            reference.
        </li>
        <li>
            The custom folder is safe from being overwritten during updates as per the
            <a href="{{ url('en/2.0/getting-started/updating-ip') }}">update documentation</a>.
        </li>
        <li>InvoicePlane uses Laravel's <a href="https://laravel.com/docs/5.5/blade" target="_blank">Blade
                templating engine</a>.
        </li>
        <li>There is no limit to how many custom templates you may have.</li>
    </ul>

    <hr>

    <span class="anchor" id="adding-custom-fields"></span>
    <h3>How do I make custom fields appear on my invoices or quotes?</h3>

    <p>
        Custom fields won't display by default on the PDF output. However, they can easily be added to the
        invoice or
        quote template PDF output by customizing the template.
    </p>

    <p>
        Once a custom field has been created for an invoice, take note of the value in the "Column Name" column.
        The system
        will name these "column_1", "column_2", etc.
    </p>

    <p style="font-weight: bold;">In the examples below, you'll replace column_1 with the column number for your
        custom field.</p>

    <p>Adding a custom invoice field to an invoice:</p>

    <pre>&#123;&#123; $invoice->custom->column_1 &#125;&#125;</pre>

    <p>Adding a custom client field to an invoice:</p>

    <pre>&#123;&#123; $invoice->client->custom->column_1 &#125;&#125;</pre>

    <p>Adding a custom quote field to a quote:</p>

    <pre>&#123;&#123; $quote->custom->column_1 &#125;&#125;</pre>

    <p>Adding a custom client field to a quote:</p>

    <pre>&#123;&#123; $quote->client->custom->column_1 &#125;&#125;</pre>

    <hr>

    <span class="anchor" id="selling-custom-templates"></span>
    <h3>Can I sell my custom templates to other InvoicePlane users?</h3>

    <p>Absolutely you can. We don't sell third party items through this site, but you're more than welcome to
        list the products you have for sale in the <a href="https://community.invoiceplane.com">InvoicePlane
            Community</a>.

    <hr>

    <span class="anchor" id="changing-logo-display-size"></span>
    <h3>How can I change the size of my logo on invoice and quote templates?</h3>

    <p>
        By default, logos are displayed on the invoice and quote PDF's at the actual image size. If you'd like
        to upload
        your logo at the full, high resolution size, you can make a quick modification to the custom invoice
        and/or
        quote templates to control the display size. This will oftentimes help logo images from appearing blurry
        or pixelated
        on the PDF's.
    </p>

    <p>The default custom templates are located at:</p>

    <pre>
custom/templates/invoice_templates/custom.blade.php
custom/templates/quote_templates/custom.blade.php
</pre>

    <p>Open the custom template to modify and change this line:</p>

    <pre>
// For invoices:
&#123;!! $invoice->companyProfile->logo() !!&#125;

// For quotes:
&#123;!! $quote->companyProfile->logo() !!&#125;
</pre>

    <p>To this:</p>

    <pre style="white-space:pre-wrap;">
// For invoices:
&#123;!! $invoice->companyProfile->logo(width, height) !!&#125;

// For quotes:
&#123;!! $quote->companyProfile->logo(width, height) !!&#125;
</pre>

    <p>For example, to display your logo at a width of 250px by a height of 50px:</p>

    <pre style="white-space:pre-wrap;">
// For invoices:
&#123;!! $invoice->companyProfile->logo(250, 50) !!&#125;

// For quotes:
&#123;!! $quote->companyProfile->logo(250, 50) !!&#125;
</pre>

@endsection
