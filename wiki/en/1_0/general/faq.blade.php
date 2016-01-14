@extends('layouts.master')

@section('title')
    FAQ - Frequently Asked Questions
@endsection

@section('content')

    <h2 class="page-title">FAQ - Frequently Asked Questions</h2>

    <div id="faq">

        <div class="alert alert-info hidden">Click on the Question to show the answer</div>

        <h3>General</h3>

        <div id="general01" class="panel panel-default">
            <div class="panel-heading">
                Can I sell / redistribute InvoicePlane?
            </div>
            <div class="panel-body">
                <p class="text-success">InvoicePlane is a free software and it will never be a commercial product! We appeal everyone to respect the InvoicePlane project and our work and refrain from selling the application.<br/>
                    What you can do: offer paid professional support or hosting for InvoicePlane.</p>
                <p>However InvoicePlane is an open source software released under <a href="http://choosealicense.com/licenses/mit/">MIT license</a>. This means that you can use the code <em>but</em> the InvoicePlane name and the logo are copyright by Invoiceplane.com and Kovah.de<br/>
                    <span class="text-danger">This means you <b>have to</b> use another name and logo for the product and include the original InvoicePlane license in the code</span>.</p>

                <p>For more information about licensing please visit the <a href="https://invoiceplane.com/license-copyright">InvoicePlane website</a>.</p>
            </div>
        </div>

        <hr/>

        <h3>Settings</h3>

        <div id="settings01" class="panel panel-default">
            <div class="panel-heading">
                Where can I set the default invoice / quote groups?
            </div>
            <div class="panel-body">
                <p>You can set the default invoice / quote groups at <code>System settings > Invoices > Default Invoice Group</code> for invoices and <code>System settings > Quotes > Default Quote Group</code> for quotes.</p>
            </div>
        </div>

        <hr/>

        <h3>Customization</h3>

        <div id="custom01" class="panel panel-default">
            <div class="panel-heading">
                How can I customize the templates?
            </div>
            <div class="panel-body">
                <p>You can find all templates in the following directories:</p>
                <b>Invoices</b>
                <p><code>/application/views/invoice_templates/</code></p>
                <b>Quotes</b>
                <p><code>/application/views/quote_templates/</code></p>
                <p>The templates are using basic HTML, CSS and PHP. If you just want to change the styling you just need some knowledge of HTML and CSS.<br/>
                If you want to include Custom Fields into the templates please refer to the <a href="/en/1.0/settings/custom-fields#add-to-template">Custom Fields page</a>.</p>
            </div>
        </div>

        <hr/>

        <h3>Errors</h3>

        <div id="error01" class="panel panel-default">
            <div class="panel-heading">
                I copied InvoicePlane to my webserver but I get blank pages or an error 404 or 500
            </div>
            <div class="panel-body">
                <p>Please make sure you copied the .htaccess file (hidden file on Unix systems) and you installed and enabled mod_rewrite for Apache.</p>
                <p>If you want to install InvoicePlane in a sub-directory like <code>yourdomain.com/invoices/</code> please follow the instructions for the <a href="/en/1.0/getting-started/installation#subdir">installation in a subdirectory</a>.</p>
            </div>
        </div>

        <div id="error02" class="panel panel-default">
            <div class="panel-heading">
                There is a large spinning cog (<i class="fa fa-cog"></i>) after I clicked a button and now nothing happens
            </div>
            <div class="panel-body">
                <p>This problem occurs if the application is stuck because of an error.</p>
                <ol>
                    <li>Open the file <code>/application/config/config.php</code> of your InvoicePlane installation.</li>
                    <li>Change the value of <code>log_threshold</code> from <code>0</code> to <code>2</code></li>
                    <li>Try again what caused the spinning cog.</li>
                    <li>Open the file <code>/application/logs/</code>, open the log file and copy the whole content.</li>
                    <li>Save the content on <a href="https://paste.invoiceplane.com">Paste.InvoicePlane.com</a> and post this link with a small description to the <a href="https://community.invoiceplane.com">Community Forums</a>.<br/>
                    You will get further help there.</li>
                </ol>
            </div>
        </div>

    </div>

@stop