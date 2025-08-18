@extends('layouts.master')

@section('title')
    Changelog
@endsection

@section('content')

    <h2 class="page-title">Changelog</h2>

    <div class="changelog">

        <div class="alert alert-info">Click on an older version to show the detailed changelog.</div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v159">
                v1.5.9 <span class="released">released 2018-04-08</span>
            </div>
            <div id="v159" class="card-body collapse show">
                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-681') !!} - Added more schedules for recurring invoices</li>
                    <li>{!! IP::devLink('IP-688') !!} - Made the list item count setting customizable</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-679') !!} - Fixes duplicate invoice number generation</li>
                    <li>{!! IP::devLink('IP-680') !!} - Recurring invoices can be deleted again</li>
                    <li>{!! IP::devLink('IP-686') !!} - Fixed issue with Select2 locale file</li>
                    <li>{!! IP::devLink('IP-687') !!} - Users can remove clients from user accounts again</li>
                </ul>
                <p>Updated Libraries</p>
                <ul>
                    <li>Codeigniter Framework (v3.1.6 => v3.1.8)</li>
                    <li>PHPMailer (v6.0.3 => v6.0.5)</li>
                    <li>paragonie/random_compat (v2.0.11 => v2.0.12)</li>
                    <li>symfony/http-foundation (v2.8.35 => v2.8.38)</li>
                    <li>symfony/event-dispatcher (v2.8.35 => v2.8.38)</li>
                    <li>DropZone (v5.3.0 => v5.4.0)</li>
                    <li>Bootstrap Datepicker (v1.7.1 => v1.8.0)</li>
                    <li>PostCSS (v6.0.18 => v6.0.21)</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v158">
                v1.5.8 <span class="released">released 2018-03-04</span>
            </div>
            <div id="v158" class="card-body collapse">
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-640') !!} - Some custom fields displayed wrong values in PDFs</li>
                    <li>{!! IP::devLink('IP-649') !!} - Deleting tax rates working again</li>
                    <li>{!! IP::devLink('IP-656') !!} - Update check is working correctly again</li>
                    <li>Smaller code corrections</li>
                </ul>
                <p>Updated Libraries</p>
                <ul>
                    <li>eWay Payment Provider (v2.2.1 => v2.2.2)</li>
                    <li>Payfast Payment Provider (v2.1.3 => v2.2.0)</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v157">
                v1.5.7 <span class="released">released 2018-02-18</span>
            </div>
            <div id="v157" class="card-body collapse">
                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-641') !!} - Browsers will use correct CSS and JavaScript files which prevents cache issues</li>
                    <li>{!! IP::devLink('IP-643') !!} - InvoicePlane is now compatible with PHP 7.2</li>
                    <li>{!! IP::devLink('IP-650') !!} - Logs for online payments are now viewable from the frontend</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-596') !!} - Password Reset now honours IP mail settings, the user can set a specific sender address in the settings</li>
                    <li>{!! IP::devLink('IP-647') !!} - Quote / invoice creation does not fail due to client select anymore</li>
                    <li>{!! IP::devLink('IP-648') !!} - Credit invoices work again correctly</li>
                    <li>{!! IP::devLink('IP-649') !!} - Quote / Invoice and item deletion is working again</li>
                    <li>{!! IP::devLink('IP-652') !!} - Testmode for online payments is working again</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v156">
                v1.5.6 <span class="released">released 2018-02-04</span>
            </div>
            <div id="v156" class="card-body collapse">
                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-623') !!} - User can now specify different invoice and quote PDF footers</li>
                    <li>{!! IP::devLink('IP-608') !!} - Email validation is now handled by the core framework</li>
                    <li>{!! IP::devLink('IP-608') !!} - The client select now accepts 1 character and selects the latest client by default</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-510') !!} - Fixes the import to work properly</li>
                    <li>{!! IP::devLink('IP-533') !!} - Fixes the invoice logo URL</li>
                    <li>{!! IP::devLink('IP-543') !!} - Fixes the HTML email tempalte handling</li>
                    <li>{!! IP::devLink('IP-602') !!} - IP now sets the correct invoice ID if sending invoices per mail</li>
                    <li>{!! IP::devLink('IP-603') !!} - IP now sets the correct quote ID if sending quotes per mail</li>
                    <li>{!! IP::devLink('IP-609') !!} - Fixes a problem with the ZUGFerd implementation</li>
                    <li>{!! IP::devLink('IP-610') !!} - Resolves a problem with the client database table</li>
                    <li>{!! IP::devLink('IP-611') !!} - Fixes the "Undefined property: CI::$mdl_invoice_amounts" error for recurring invoices</li>
                    <li>{!! IP::devLink('IP-613') !!} - Fixes an issues the prevents client selection for projects</li>
                    <li>{!! IP::devLink('IP-617') !!} - Multiple email addresses now work for sending invoices and quotes</li>
                    <li>{!! IP::devLink('IP-620') !!} - Invoice name with space can now be downloaded in the archive page</li>
                    <li>{!! IP::devLink('IP-621') !!} - PDF template now changes when changing email templates</li>
                </ul>
                <p>Updated Libraries</p>
                <ul>
                    <li>PHPMailer (v5.2.26 => v6.0.3)</li>
                    <li>mPDF (v6 => v7.0.3)</li>
                    <li>Authorizenet Payment Provider (v2.5.0 => v2.5.1)</li>
                    <li>Firstdata Payment Provider (v2.3.0 => V2.4.0)</li>
                    <li>Payflow Payment Provider (v2.2.2 => V2.3.0)</li>
                    <li>PayPal Payment Provider (v2.6.3 => V2.6.4)</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v155">
                v1.5.5 <span class="released">released 2017-10-29</span>
            </div>
            <div id="v155" class="card-body collapse in">
                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-608]') !!} - Dropdown fields are now translated</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-571') !!} - Resolves the <em>unlink(/uploads/temp/mpdf): Is a directory</em> error</li>
                    <li>{!! IP::devLink('IP-574') !!} - Resolves the <em>Cannot use [ ] for reading in Mdl_custom_fields.php on line 257</em> error</li>
                    <li>{!! IP::devLink('IP-577') !!} - Resolves the <em>Undefined property: CI::$mdl_invoice_tax_rates</em> error</li>
                    <li>{!! IP::devLink('IP-579') !!} - Further client details are now escaped properly</li>
                    <li>{!! IP::devLink('IP-587') !!} - Product units are now preserved when copying invoices / quotes</li>
                    <li>{!! IP::devLink('IP-588') !!} - The payment method is set correctly when copying invoices</li>
                    <li>{!! IP::devLink('IP-589') !!} - The correct default tax rate is set for products</li>
                    <li>{!! IP::devLink('IP-590') !!} - Searching for products can now be triggered with the return key</li>
                    <li>{!! IP::devLink('IP-605') !!} - Custom fields are now available in web templates again</li>
                    <li>{!! IP::devLink('IP-606') !!} - Create quote / invoice modal does now escape usernames correctly</li>
                </ul>
                <p>Updated Libraries</p>
                <ul>
                    <li>Codeigniter Framework (v3.1.5 => v3.1.6)</li>
                    <li>Sagepay Payment Provider (v2.4.0 => v2.4.1)</li>
                    <li>Worldpay Payment Provider (v2.2.1 => V2.2.2)</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v154">
                v1.5.4 <span class="released">released 2017-09-03</span>
            </div>
            <div id="v154" class="card-body collapse">
                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-544]') !!} - Improved client search</li>
                    <li>{!! IP::devLink('IP-549]') !!} - HTML Emails now contain a plaintext body to reduce spam score</li>
                    <li>{!! IP::devLink('IP-560]') !!} - Items in recurring invoices can now b toggled</li>
                    <li>{!! IP::devLink('IP-573]') !!} - Multiple Choice custom fields are now available in templates</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-527') !!} - Fixes a dashboard problem</li>
                    <li>{!! IP::devLink('IP-529') !!} - Fixes the Zugferd implementation</li>
                    <li>{!! IP::devLink('IP-547') !!} - Clients can now approve/reject quotes without logging in again</li>
                    <li>{!! IP::devLink('IP-551') !!} - Custom Fields (ip_cf_x) are available in email templates</li>
                    <li>{!! IP::devLink('IP-552') !!} - Worldpay is now fully supported</li>
                    <li>{!! IP::devLink('IP-555') !!} - Recurring invoices do work again</li>
                    <li>{!! IP::devLink('IP-556') !!} - Recurring invoices now keep item_discount</li>
                    <li>{!! IP::devLink('IP-572') !!} - Recurring invoices are now computed correctly</li>
                </ul>
                <p>Updated Libraries</p>
                <ul>
                    <li>PhpMailer (v5.2.23 => v5.2.25)</li>
                    <li>Payfast Payment Provider (v2.1.2 => v2.1.3)</li>
                    <li>Stripe Payment Provider (v2.4.6 => V2.4.7)</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v153">
                v1.5.3 <span class="released">released 2017-06-11</span>
            </div>
            <div id="v153" class="card-body collapse">
                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-522') !!} - Clients do not have to login to pay an invoice</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-528') !!} - Email template is now loaded for quote emails again</li>
                    <li>{!! IP::devLink('IP-534') !!} - Passwordreset is working again</li>
                    <li>{!! IP::devLink('IP-535') !!} - Fix for some online payment providers which required a description for the payment</li>
                    <li>{!! IP::devLink('IP-536') !!} - The SMTP password is now saved permanently</li>
                    <li>{!! IP::devLink('IP-537') !!} - Copying quotes and invoices is working again</li>
                    <li>{!! IP::devLink('IP-541') !!} - Fix for the public quote / invoice views, not showing a 404 page instead of errors</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v152">
                v1.5.2 <span class="released">released 2017-05-07</span>
            </div>
            <div id="v152" class="card-body collapse in">
                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-471') !!} - New setting: verify SMTP certificates</li>
                    <li>{!! IP::devLink('IP-520') !!} - New setting: open reports in a new tab</li>
                    <li>{!! IP::devLink('IP-522') !!} - Guest can now pay online without having to login</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-506') !!} - Solves 404 errors for online payments</li>
                    <li>{!! IP::devLink('IP-515') !!} - SMTP Setup with SSL no longer fails</li>
                    <li>{!! IP::devLink('IP-519') !!} - Users couldn't search for quotes, invoices or payments</li>
                    <li>{!! IP::devLink('IP-524') !!} - Recurring invoices: error in interval dropdown</li>
                    <li>{!! IP::devLink('IP-525') !!} - Solved: Undefined property: CI::$mdl_settings in Setup</li>
                    <li>{!! IP::devLink('IP-526') !!} - Solved: Can't use function return value in write context in Setup.php on line 338</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v151">
                v1.5.1 <span class="released">released 2017-04-30</span>
            </div>
            <div id="v151" class="card-body collapse">
                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-511') !!} - Let the user disable the setup from the ipconfig.php file</li>
                    <li>{!! IP::devLink('IP-514') !!} - Add a password strength meter</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-507') !!} - Copy Quote not working correctly</li>
                    <li>{!! IP::devLink('IP-508') !!} - Password can't be changed for user accounts</li>
                    <li>{!! IP::devLink('IP-509') !!} - Custom fields are not processed for email templates</li>
                    <li>{!! IP::devLink('IP-513') !!} - Newline to &lt;br&gt; in product descriptions</li>
                    <li>{!! IP::devLink('IP-517') !!} - Fix for the ipconfig.php access blocking</li>
                    <li>{!! IP::devLink('IP-518') !!} - MySQL: Headers and client library minor version mismatch</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v150">
                v1.5.0 <span class="released">released 2017-04-23</span>
            </div>
            <div id="v150" class="card-body collapse">
                <p>New Features</p>
                <ul>
                    <li>{!! IP::devLink('IP-46') !!} - Add more custom field types</li>
                    <li>{!! IP::devLink('IP-162') !!} - Support for <a href="/en/1.5/modules/tasks_projects">Tasks and Projects</a></li>
                    <li>{!! IP::devLink('IP-219') !!} - Add option to filter products by family while adding to invoice</li>
                    <li>{!! IP::devLink('IP-317') !!} - Support for more than 25 payment gateways using the Omnipay library</li>
                    <li>{!! IP::devLink('IP-338') !!} - InvoicePlane now supports themes</li>
                    <li>{!! IP::devLink('IP-475') !!} - Users can now select units to choose from when adding items / products</li>
                    <li>{!! IP::devLink('IP-485') !!} - Implement CSRF protection</li>
                    <li>{!! IP::devLink('IP-491') !!} - Users can now set a language per client and user</li>
                    <li>{!! IP::devLink('IP-499') !!} - Support for Sumex (Swiss Medical Invoices)</li>
                </ul>
                <p>Improvement</p>
                <ul>
                    <li>{!! IP::devLink('IP-464') !!} - Include the from/to dates in the report PDFs</li>
                    <li>{!! IP::devLink('IP-465') !!} - Support non-standard MySQL ports</li>
                    <li>{!! IP::devLink('IP-476') !!} - Make all quote data available to an invoice if available</li>
                    <li>{!! IP::devLink('IP-481') !!} - Add default_item_tax_rate setting to output</li>
                    <li>{!! IP::devLink('IP-484') !!} - Implement an .env file to store per-setup configuration</li>
                    <li>{!! IP::devLink('IP-488') !!} - Allow to use two digit year number in quote and invoice numbers</li>
                    <li>{!! IP::devLink('IP-493') !!} - Restructure assets to be compatible with theme support</li>
                    <li>{!! IP::devLink('IP-494') !!} - Update mPDF source to a IP fork, update the pdf helper</li>
                    <li>{!! IP::devLink('IP-495') !!} - Make email addresses mandatory for clients</li>
                    <li>{!! IP::devLink('IP-496') !!} - Add email address to client selects to differ in case of duplicate names</li>
                    <li>{!! IP::devLink('IP-500') !!} - Make attachments available in web templates for quotes and invoices</li>
                    <li>{!! IP::devLink('IP-502') !!} - Extend the sidebar with new modules</li>
                    <li>{!! IP::devLink('IP-503') !!} - Dynamically load clients for client select forms</li>
                    <li>{!! IP::devLink('IP-504') !!} - Unify the interface</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-291') !!} - The system now supports all new domain names</li>
                    <li>{!! IP::devLink('IP-301') !!} - Special characters no longer break the interface</li>
                    <li>{!! IP::devLink('IP-420') !!} - Multiple recurring invoices get computed correctly if on same month</li>
                    <li>{!! IP::devLink('IP-456') !!} - Missing echo in quotes_view.php (guest) was added</li>
                    <li>{!! IP::devLink('IP-459') !!} - Fixes a security problem with user-uploaded files</li>
                    <li>{!! IP::devLink('IP-462') !!} - Fixes a security problem with cross-user inputs</li>
                    <li>{!! IP::devLink('IP-468') !!} - Fixes a bug where user couldn't login</li>
                    <li>{!! IP::devLink('IP-469') !!} - Remove logo link not translated in settings</li>
                    <li>{!! IP::devLink('IP-472') !!} - Invoice no longer shown as paid despite client didn't paid complete amount</li>
                    <li>{!! IP::devLink('IP-477') !!} - Nonstandard address format in templates</li>
                    <li>{!! IP::devLink('IP-483') !!} - Small code fixes</li>
                    <li>{!! IP::devLink('IP-487') !!} - Fixes bug where credit invoices couldn't be paid because "Payment amount cannot exceed invoice balance"</li>
                    <li>{!! IP::devLink('IP-489') !!} - Invoices are now set to read-only after adding complete payment</li>
                    <li>{!! IP::devLink('IP-497') !!} - Public quotes now have a approve / reject functionality</li>
                    <li>{!! IP::devLink('IP-501') !!} - Fixes bug where client custom fields are not saved to the database</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v1410">
                v1.4.10 <span class="released">released 2016-11-12</span>
            </div>
            <div id="v1410" class="card-body collapse">
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-455') !!} - Fixes the ZUGFeRD implementation for PDF files</li>
                    <li>{!! IP::devLink('IP-457') !!} - Patch for security vulnerability</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v149">
                v1.4.9 <span class="released">released 2016-10-30</span>
            </div>
            <div id="v149" class="card-body collapse">
                <p>New Features</p>
                <ul>
                    <li>{!! IP::devLink('IP-447') !!} - InvoicePlane now ships with a config file for Docker</li>
                </ul>
                <p>Improvement</p>
                <ul>
                    <li>{!! IP::devLink('IP-186') !!} - New optiosn for recurring invoices</li>
                    <li>{!! IP::devLink('IP-422') !!} - Improved security for sessions</li>
                    <li>{!! IP::devLink('IP-444') !!} - mPDF updated to version 6.1</li>
                    <li>{!! IP::devLink('IP-450') !!} - Problems with URLs solved</li>
                    <li>{!! IP::devLink('IP-454') !!} - Updated default data and settings</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-382') !!} - Fix for layout issues</li>
                    <li>{!! IP::devLink('IP-434') !!} - Smaller fixes for the guest view</li>
                    <li>{!! IP::devLink('IP-435') !!} - Fixed displaying of amounts for taxes</li>
                    <li>{!! IP::devLink('IP-436') !!} - Fix for payments for recurring invoices</li>
                    <li>{!! IP::devLink('IP-440') !!} - Emails can now be sent with an empty body</li>
                    <li>{!! IP::devLink('IP-441') !!} - Clients can now be added to user accounts again</li>
                    <li>{!! IP::devLink('IP-443') !!} - Guest views are now more secure</li>
                    <li>{!! IP::devLink('IP-445') !!} - Fixed alert messages for user password reset</li>
                    <li>{!! IP::devLink('IP-446') !!} - Fixed the 'Today' button of the datepicker</li>
                    <li>{!! IP::devLink('IP-448') !!} - Fixed issue with mPDf and the translation function</li>
                    <li>{!! IP::devLink('IP-449') !!} - Updated logging and updated debug mode</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v148">
                v1.4.8 <span class="released">released 2016-07-31</span>
            </div>
            <div id="v148" class="card-body collapse">
                <p>Improvement</p>
                <ul>
                    <li>{!! IP::devLink('IP-255') !!} - Do not generate invoice number for draft invoices</li>
                    <li>{!! IP::devLink('IP-425') !!} - Improve language handling and displaying for empty translations</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-424') !!} - item_subtotal in default template</li>
                    <li>{!! IP::devLink('IP-428') !!} - Subfolder detection not working on Windows</li>
                    <li>{!! IP::devLink('IP-430') !!} - Hide inactive clients in client list</li>
                    <li>{!! IP::devLink('IP-432') !!} - SQL field types lead to problems with some MySQL versions</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v147">
                v1.4.7 <span class="released">released 2016-07-02</span>
            </div>
            <div id="v147" class="card-body collapse">
                 <p>New Features</p>
                <ul>
                    <li>{!! IP::devLink('IP-412') !!} - Implementation ZUGFeRD XML for PDFs</li>
                </ul>
                <p>Improvement</p>
                <ul>
                    <li>{!! IP::devLink('IP-104') !!} - Custom fields are not copied when Invoice is duplicated</li>
                    <li>{!! IP::devLink('IP-255') !!} - Do not generate invoice number for draft invoices</li>
                    <li>{!! IP::devLink('IP-322') !!} - Invoice item_name database field should be larger</li>
                    <li>{!! IP::devLink('IP-404') !!} - mPDF does not show image errors</li>
                    <li>{!! IP::devLink('IP-406') !!} - Update the web preview for invoices and quotes</li>
                    <li>{!! IP::devLink('IP-407') !!} - Add attachments to the web views for invoices and quotes</li>
                    <li>{!! IP::devLink('IP-408') !!} - Add reference to products to items</li>
                    <li>{!! IP::devLink('IP-417') !!} - Improve product database handling</li>
                    <li>{!! IP::devLink('IP-421') !!} - Allow items to have empty description, quantity and price</li>
                    <li>{!! IP::devLink('IP-422') !!} - Improve session security</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-301') !!} - Special characters in Client Name breaks invoice/quote creation</li>
                    <li>{!! IP::devLink('IP-303') !!} - Incorrect decimal value: '' for column 'item_discount_amount'</li>
                    <li>{!! IP::devLink('IP-330') !!} - Quotes still use the "Quote Number" translation string</li>
                    <li>{!! IP::devLink('IP-386') !!} - Discounts are lost when converting quote to invoice</li>
                    <li>{!! IP::devLink('IP-399') !!} - Description of Paypal appear "0"</li>
                    <li>{!! IP::devLink('IP-400') !!} - PDF Report has unwanted file security Password</li>
                    <li>{!! IP::devLink('IP-401') !!} - Forgot Password does not honor System Mail Settings</li>
                    <li>{!! IP::devLink('IP-413') !!} - Tax does not get copied on recurring invoices</li>
                    <li>{!! IP::devLink('IP-419') !!} - Don’t mark drafts with invoice_total == 0 as paid</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v146">
                v1.4.6 <span class="released">released 2016-02-07</span>
            </div>
            <div id="v146" class="card-body collapse">
                <p>Improvement</p>
                <ul>
                    <li>{!! IP::devLink('IP-383') !!} - Update lib_mysql to use mysqli</li>
                    <li>{!! IP::devLink('IP-384') !!} - Add a debug mode to make error reporting easier</li>
                    <li>{!! IP::devLink('IP-385') !!} - Optimize the login and password reset handling</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-310') !!} - Taxes and products do not respect separator and decimal</li>
                    <li>{!! IP::devLink('IP-379') !!} - Quotes / invoices sums are not calculated</li>
                    <li>{!! IP::devLink('IP-380') !!} - Assets were not updated in the setup layout</li>
                    <li>{!! IP::devLink('IP-381') !!} - Datepicker not working in some modals</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v145">
                v1.4.5 <span class="released">released 2016-01-31</span>
            </div>
            <div id="v145" class="card-body collapse">
                <p>Improvement</p>
                <ul>
                    <li>{!! IP::devLink('IP-356') !!} - Hide discount columns on PDF templates if no item has a discount</li>
                    <li>{!! IP::devLink('IP-357') !!} - Disable URL rewriting by default to prevent problems with .htaccess</li>
                    <li>{!! IP::devLink('IP-358') !!} - Optimize the PDF templates</li>
                    <li>{!! IP::devLink('IP-377') !!} - Update all assets</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-359') !!} - Fix for incorrect integer value: '' for column 'payment_method'</li>
                    <li>{!! IP::devLink('IP-361') !!} - htmlspecialchars() missing on client edit screen</li>
                    <li>{!! IP::devLink('IP-363') !!} - Custom title still missing for the login page</li>
                    <li>{!! IP::devLink('IP-373') !!} - Templates displays wrong zips from user / client</li>
                    <li>{!! IP::devLink('IP-374') !!} - Model declarations are not compatible with Response_Model</li>
                    <li>{!! IP::devLink('IP-375') !!} - Dashboard calculates only the last 10 overdue invoices</li>
                    <li>{!! IP::devLink('IP-376') !!} - Remove deprecated / unnecessary code from the layout</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v144">
                v1.4.4 <span class="released">released 2015-12-13</span>
            </div>
            <div id="v144" class="card-body collapse">
                <p>Improvement</p>
                <ul>
                    <li>{!! IP::devLink('IP-293') !!} - Custom title for public view of quotes / invoices</li>
                    <li>{!! IP::devLink('IP-312') !!} - Current logged in user now displayed</li>
                    <li>{!! IP::devLink('IP-355') !!} - Overhaul the PDF templates</li>
                    <li>{!! IP::devLink('IP-333') !!} - Upgrade of the PHPMailer library</li>
                    <li>Various other code improvements and smaller corrections</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-291') !!} - Let CodeIgniter also accept new domain names</li>
                    <li>{!! IP::devLink('IP-306') !!} - PDF: invoice details not properly aligned</li>
                    <li>{!! IP::devLink('IP-308') !!} - Invoice in archive was empty (zero bytes)</li>
                    <li>{!! IP::devLink('IP-310') !!} - Taxes and products didn't respect separator and decimal</li>
                    <li>{!! IP::devLink('IP-315') !!} - Array definitions were incompatible with PHP &lt; 5.4</li>
                    <li>{!! IP::devLink('IP-328') !!} - Fixed Problems with functions in number_helper.php</li>
                    <li>{!! IP::devLink('IP-331') !!} - Emails for recurring invoices didn't process CSS styles</li>
                    <li>{!! IP::devLink('IP-332') !!} - Missing lang file when you have set other language</li>
                    <li>{!! IP::devLink('IP-336') !!} - Editing a product caused the price to change</li>
                    <li>{!! IP::devLink('IP-346') !!} - Create payment - Payment method will not be saved</li>
                    <li>{!! IP::devLink('IP-349') !!} - Custom field input length increased</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v143">
                v1.4.3 <span class="released">released 2015-06-21</span>
            </div>
            <div id="v143" class="card-body collapse">
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-304') !!} - Fixed bug where password fields were empty on settings pages</li>
                    <li>{!! IP::devLink('IP-303') !!} - Fixed bug where quotes or invoices couldn't be saved because of an
                        'Incorrect decimal value'
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v142">
                v1.4.2 <span class="released">released 2015-06-14</span>
            </div>
            <div id="v142" class="card-body collapse">
                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-302') !!} - Increased the loading overlay timeout</li>
                </ul>

                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-299') !!} - Fixed bug where invoices no longer accepted item prices between 0
                        and 1 (e.g. 0,75)
                    </li>
                    <li>{!! IP::devLink('IP-300') !!} - Fixed bug with BCC for emails</li>
                    <li>{!! IP::devLink('IP-301') !!} - Fixed bug where special characters in client names broke
                        invoice/quote creation
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v141">
                v1.4.1 <span class="released">released 2015-06-07</span>
            </div>
            <div id="v141" class="card-body collapse">
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-286') !!} - Discount input fields are now disabled on read-only invoices</li>
                    <li>{!! IP::devLink('IP-287') !!} - “Create product” without a valid “Family” should not throw a
                        SQL/PHP error
                    </li>
                    <li>{!! IP::devLink('IP-288') !!} - Fix for wrong discount calculations, now working without invoice
                        taxes
                    </li>
                    <li>{!! IP::devLink('IP-290') !!} - Fix where the payment method couldn't be changed if empty</li>
                    <li>{!! IP::devLink('IP-292') !!} - New guest users can now be added without required country field
                    </li>
                    <li>{!! IP::devLink('IP-294') !!} - Invoices can't be saved now with completely empty items</li>
                    <li>{!! IP::devLink('IP-295') !!} - Fix where items can be deleted even if in read-only</li>
                    <li>{!! IP::devLink('IP-296') !!} - Fix for errors because of missing language strings</li>
                    <li>{!! IP::devLink('IP-297') !!} - Fix for errors because of undefined variables</li>
                    <li>{!! IP::devLink('IP-298') !!} - Loading screen was optimized</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v140">
                v1.4.0 <span class="released">released 2015-05-20</span>
            </div>
            <div id="v140" class="card-body collapse">
                <p>New Features</p>
                <ul>
                    <li>{!! IP::devLink('IP-86') !!} - Option to enter discounts on quotes / invoices</li>
                    <li>{!! IP::devLink('IP-202') !!} - Invoice PDFs will now be archived</li>
                    <li>{!! IP::devLink('IP-236') !!} - Option to send all outgoing emailt as BCC to the admin</li>
                    <li>{!! IP::devLink('IP-237') !!} - Option to set pre-set payment method</li>
                    <li>{!! IP::devLink('IP-211') !!} - Attachments for emails</li>
                    <li>{!! IP::devLink('IP-215') !!} - Option to hcange the client on draft invoices / quotes</li>
                    <li>{!! IP::devLink('IP-252') !!} - Option to add custom language strings</li>
                    <li>{!! IP::devLink('IP-269') !!} - Duplicate "Add new Row / Product" buttons on bottom of item
                        table
                    </li>
                </ul>

                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-232') !!} - Show sum of payments in payment report</li>
                    <li>{!! IP::devLink('IP-242') !!} - Completely overhaul of the quote / invoice edit screens</li>
                    <li>{!! IP::devLink('IP-264') !!} - Product descriptions are now available as a textarea</li>
                    <li>{!! IP::devLink('IP-265') !!} - The client name is now displayed above the detail pages</li>
                    <li>{!! IP::devLink('IP-270') !!} - The client select was improved</li>
                    <li>{!! IP::devLink('IP-282') !!} - The app now indicates loading</li>
                    <li>{!! IP::devLink('IP-283') !!} - Item amounts can now be larger (up to 20 numbers)</li>
                    <li>{!! IP::devLink('IP-270') !!} - The client select was improved</li>
                    <li>{!! IP::devLink('IP-270') !!} - The setup process was optimized</li>
                    <li>Various other smaller improvements</li>
                </ul>

                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-205') !!} - Some pages of the guest login were not displayed correctly</li>
                    <li>{!! IP::devLink('IP-280') !!} - Improved support for non-latin characters on PDF files</li>
                    <li>{!! IP::devLink('IP-270') !!} - Fix where clients couldn't be added in the new select form</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v133">
                v1.3.3 <span class="released">released 2015-05-06</span>
            </div>
            <div id="v133" class="card-body collapse">
                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-278') !!} - Payment methods can't be modified after saving</li>
                    <li>{!! IP::devLink('IP-277') !!} - Product families can't be modified after saving</li>
                    <li>{!! IP::devLink('IP-276') !!} - Email Templates can't be modified after saving</li>
                    <li>{!! IP::devLink('IP-275') !!} - Clients can't be modified after saving</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v132">
                v1.3.2 <span class="released">released 2015-05-03</span>
            </div>
            <div id="v132" class="card-body collapse">
                <p>Improvements</p>
                <ul>
                    <li>{!! IP::devLink('IP-247') !!} - Improved filter form handling</li>
                    <li>{!! IP::devLink('IP-251') !!} - Improved language support</li>
                    <li>{!! IP::devLink('IP-257') !!} - Error logging is now disabled by default</li>
                    <li>{!! IP::devLink('IP-274') !!} - Some fields now have to be unique</li>
                </ul>

                <p>Fixed Bugs</p>
                <ul>
                    <li>{!! IP::devLink('IP-239') !!} - Payment method was not inserted</li>
                    <li>{!! IP::devLink('IP-241') !!} - Invoices were not set to Paid after adding a payment</li>
                    <li>{!! IP::devLink('IP-245') !!} - Inputfield for product prices were not formatted correctly</li>
                    <li>{!! IP::devLink('IP-248') !!} - Clients could be added twice</li>
                    <li>{!! IP::devLink('IP-249') !!} - Very slow PDF generation and site loading</li>
                    <li>{!! IP::devLink('IP-258') !!} - VAT ID was displayed in the Custom Fields section</li>
                    <li>{!! IP::devLink('IP-260') !!} - Email Templates: HTML editor did not work correctly</li>
                    <li>{!! IP::devLink('IP-261') !!} - Email Templates: Template tags were not inserted</li>
                    <li>{!! IP::devLink('IP-262') !!} - Resolved MySQL issues in v1.2.0 update script</li>
                    <li>{!! IP::devLink('IP-263') !!} - Resolved error with missing country language files</li>
                    <li>{!! IP::devLink('IP-273') !!} - Link on dashboard now works with installs on sub-directory</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v131">
                v1.3.1 <span class="released">released 2015-04-14</span>
            </div>
            <div id="v131" class="card-body collapse">
                <p>Bugs</p>
                <ul>
                    <li>Product names are now properly escaped</li>
                    <li>PDF password issues have been resolved</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v130">
                v1.3.0 <span class="released">released 2015-04-12</span>
            </div>
            <div id="v130" class="card-body collapse">
                <p>New Features</p>
                <ul>
                    <li>Support for HTML and CSS in Email templates</li>
                    <li>Complete redesign of the Dashboard</li>
                    <li>Ability to add notes to quotes</li>
                    <li>Ability to pre-set a payment method for an invoice</li>
                    <li>Ability to add passwords to PDF files for invoices and quotes</li>
                    <li>Ability to set the number of items in lists</li>
                </ul>

                <p>Improvements</p>
                <ul>
                    <li>"Move" icons added to quote item tables</li>
                    <li>Time of the invoice creation is now stored in the database</li>
                    <li>Optimization of the application assets</li>
                    <li>Optimization of the application layout files and structure</li>
                    <li>InvoicePlane now uses the Source Pro font family (Source Sans Pro and Source Code Pro)</li>
                    <li>Invoice Groups can now contain up to 100 characters</li>
                    <li>Several other smaller improvements</li>
                </ul>

                <p>Fixed Bugs</p>
                <ul>
                    <li>Menu bar fixed for mobile devices</li>
                    <li>Recurring invoices now can be created from read-only invoices</li>
                    <li>Fix of the import form</li>
                    <li>Remove of debug functions from the updatecheck</li>
                    <li>Fix of the datepicker language loading</li>
                    <li>Fix of several report problems</li>
                    <li>Several other smaller fixes</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v121">
                v1.2.1 <span class="released">released 2015-03-08</span>
            </div>
            <div id="v121" class="card-body collapse">
                <p>Improvements</p>
                <ul>
                    <li>InvoicePlane now ships with some languages by default</li>
                    <li>Quarter is now available as Dashboard period</li>
                    <li>User can choose when invoice should be set to read-only</li>
                    <li>Copying invoices now uses the current date</li>
                    <li>Read-only can be disabled in the config</li>
                    <li>Client details page were updated</li>
                    <li>mPDF updated to the latest version</li>
                    <li>Codeigniter updated to 2.2.1</li>
                    <li>Invoices now open in a new tab</li>
                    <li>PDF templates updated, custom.css can now be used for templates</li>
                    <li>InvoicePlane now supports svg images as a logo</li>
                    <li>Navbar is not longer fixed to top which solves mobile device issues</li>
                </ul>

                <p>Bugs</p>
                <ul>
                    <li>Dashboard period calculations fixed</li>
                    <li>Bug with special characters in PDFs fixed</li>
                    <li>Bug where empty invoices were set to read-only fixed</li>
                    <li>App uses MySQLi be default now</li>
                    <li>Smaller UI fixes</li>
                    <li>Bug with timezone handling fixed</li>
                    <li>Bug with datepicker language file fixed</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v120">
                v1.2.0 <span class="released">released 2015-02-22</span>
            </div>
            <div id="v120" class="card-body collapse">
                <p>New Features</p>
                <ul>
                    <li>Items are replaced by products with full category (family) and purchase price support</li>
                    <li>Support for credit invoices added</li>
                    <li>Invoices can now only be deleted under certain circumstances</li>
                    <li>Ability to set a period for quote / invoice overviews on dashboard</li>
                    <li>Ability to choose a default country for clients</li>
                    <li>Sidebar is now disabled by default, you can enable it in the settings</li>
                    <li>Ability to choose an own title for the browser window</li>
                    <li>InvoicePlane sends a mail to the administrator if a quote was rejected / approved</li>
                    <li>Client payments are now shown in the client details</li>
                    <li>Amounts can now be displayed in a monospace font</li>
                    <li>The update check was improved and InvoicePlane news will be displayed on the settings page</li>
                    <li>Ability to set a custom footer for invoice pdf files with support for HTML and CSS</li>
                </ul>

                <p>Improvements</p>
                <ul>
                    <li>Invoices are sorted by their ID</li>
                    <li>InvoicePlane now uses the Noto font</li>
                    <li>Assets were updated</li>
                    <li>URL keys are now 15 characters long (before: 32)</li>
                </ul>

                <p>Bugs</p>
                <ul>
                    <li>Sidebar width and height fixed</li>
                    <li>Fixed responsive tables on mobile devices</li>
                    <li>Fix for wrong working cancel button</li>
                    <li>Various language fixes</li>
                    <li>Various other small UI and design fixes</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v112">
                v1.1.2 <span class="released">released 2015-01-27</span>
            </div>
            <div id="v112" class="card-body collapse">
                <p>Improvements</p>
                <ul>
                    <li>jQuery, Bootstrap, Modernizer were updated</li>
                    <li>Invoices are now sorted by their ID</li>
                    <li>Settings page tabs are now displayed on top of the page</li>
                    <li>UI improvements for invoice and quote tables</li>
                    <li>Updatechecks will now use https</li>
                    <li>Empty custom fields are now removed from the client details</li>
                    <li>Sidebar with fixed height and UI</li>
                    <li>Favicon added</li>
                    <li>Amounts are now displayed correctly</li>
                    <li>Other various smaller UI improvements</li>
                </ul>

                <p>Bugs</p>
                <ul>
                    <li>Fixed cancel send email button</li>
                    <li>Fixed timezone errors</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v111">
                v1.1.1 <span class="released">released 2014-12-21</span>
            </div>
            <div id="v111" class="card-body collapse">
                <p>Improvements</p>
                <ul>
                    <li>Some smaller UI changes</li>
                    <li>Set default value for type of template</li>
                </ul>

                <p>Bugs</p>
                <ul>
                    <li>Fixed wrong VAT and tax ID in quote templates</li>
                    <li>Fixed problems with PHP short tags</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v110">
                v1.1.0 <span class="released">released 2014-11-09</span>
            </div>
            <div id="v110" class="card-body collapse">
                <p>New Features</p>
                <ul>
                    <li>Check for new updates added to the system settings</li>
                    <li>You can set a default subject for email templates now</li>
                    <li>VAT ID / tax code functionality added</li>
                    <li>Password reset from login screen</li>
                    <li>IP will remember your login for a longer time now</li>
                    <li>Custom.css added for your own styles</li>
                </ul>

                <p>Improvements</p>
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

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v102">
                v1.0.2 <span class="released">released 2014-08-28</span>
            </div>
            <div id="v102" class="card-body collapse">
                <p>Bugs</p>
                <ul>
                    <li>Hotfix release for issues with tax rates and sum in quotes and invoices.</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v101">
                v1.0.1 <span class="released">released 2014-08-23</span>
            </div>
            <div id="v101" class="card-body collapse">
                <p>General</p>
                <ul>
                    <li>Ping question after the setup removed</li>
                </ul>

                <p>Improvements</p>
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

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v100">
                v1.0.0 <span class="released">released 2014-07-12</span>
            </div>
            <div id="v100" class="card-body collapse">
                <p>Initial version</p>
            </div>
        </div>

    </div>

@stop