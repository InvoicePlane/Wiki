@extends('layouts.master')

@section('content')

<h2 class="page-title">Changelog</h2>

<div class="changelog">

    <div class="alert alert-info">Click on an older version to show the detailed changelog.</div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v140">
            v1.4.0 <span class="released">released 05/20/2015</span>
        </div>
        <div id="v140" class="panel-body collapse in">
            <p>New Features</p>
            <ul>
                <li>{{ IP::devLink('IP-86') }} - Option to enter discounts on quotes / invoices</li>
                <li>{{ IP::devLink('IP-202') }} - Invoice PDFs will now be archived</li>
                <li>{{ IP::devLink('IP-236') }} - Option to send all outgoing emailt as BCC to the admin</li>
                <li>{{ IP::devLink('IP-237') }} - Option to set pre-set payment method</li>
                <li>{{ IP::devLink('IP-211') }} - Attachments for emails</li>
                <li>{{ IP::devLink('IP-215') }} - Option to hcange the client on draft invoices / quotes</li>
                <li>{{ IP::devLink('IP-252') }} - Option to add custom language strings</li>
                <li>{{ IP::devLink('IP-269') }} - Duplicate "Add new Row / Product" buttons on bottom of item table</li>
            </ul>

            <p>Improvements</p>
            <ul>
                <li>{{ IP::devLink('IP-232') }} - Show sum of payments in payment report</li>
                <li>{{ IP::devLink('IP-242') }} - Completely overhaul of the quote / invoice edit screens</li>
                <li>{{ IP::devLink('IP-264') }} - Product descriptions are now available as a textarea</li>
                <li>{{ IP::devLink('IP-265') }} - The client name is now displayed above the detail pages</li>
                <li>{{ IP::devLink('IP-270') }} - The client select was improved</li>
                <li>{{ IP::devLink('IP-282') }} - The app now indicates loading</li>
                <li>{{ IP::devLink('IP-283') }} - Item amounts can now be larger (up to 20 numbers)</li>
                <li>{{ IP::devLink('IP-270') }} - The client select was improved</li>
                <li>{{ IP::devLink('IP-270') }} - The setup process was optimized</li>
                <li>Various other smaller improvements</li>
            </ul>

            <p>Fixed Bugs</p>
            <ul>
                <li>{{ IP::devLink('IP-205') }} - Some pages of the guest login were not displayed correctly</li>
                <li>{{ IP::devLink('IP-280') }} - Improved support for non-latin characters on PDF files</li>
                <li>{{ IP::devLink('IP-270') }} - Fix where clients couldn't be added in the new select form</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v133">
            v1.3.3 <span class="released">released 05/06/2015</span>
        </div>
        <div id="v133" class="panel-body collapse in">
            <p>Fixed Bugs</p>
            <ul>
                <li>{{ IP::devLink('IP-278') }} - Payment methods can't be modified after saving</li>
                <li>{{ IP::devLink('IP-277') }} - Product families can't be modified after saving</li>
                <li>{{ IP::devLink('IP-276') }} - Email Templates can't be modified after saving</li>
                <li>{{ IP::devLink('IP-275') }} - Clients can't be modified after saving</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v132">
            v1.3.2 <span class="released">released 05/03/2015</span>
        </div>
        <div id="v132" class="panel-body collapse">
            <p>Improvements</p>
            <ul>
                <li>{{ IP::devLink('IP-247') }} - Improved filter form handling</li>
                <li>{{ IP::devLink('IP-251') }} - Improved language support</li>
                <li>{{ IP::devLink('IP-257') }} - Error logging is now disabled by default</li>
                <li>{{ IP::devLink('IP-274') }} - Some fields now have to be unique</li>
            </ul>

            <p>Fixed Bugs</p>
            <ul>
                <li>{{ IP::devLink('IP-239') }} - Payment method was not inserted</li>
                <li>{{ IP::devLink('IP-241') }} - Invoices were not set to Paid after adding a payment</li>
                <li>{{ IP::devLink('IP-245') }} - Inputfield for product prices were not formatted correctly</li>
                <li>{{ IP::devLink('IP-248') }} - Clients could be added twice</li>
                <li>{{ IP::devLink('IP-249') }} - Very slow PDF generation and site loading</li>
                <li>{{ IP::devLink('IP-258') }} - VAT ID was displayed in the Custom Fields section</li>
                <li>{{ IP::devLink('IP-260') }} - Email Templates: HTML editor did not work correctly</li>
                <li>{{ IP::devLink('IP-261') }} - Email Templates: Template tags were not inserted</li>
                <li>{{ IP::devLink('IP-262') }} - Resolved MySQL issues in v1.2.0 update script</li>
                <li>{{ IP::devLink('IP-263') }} - Resolved error with missing country language files</li>
                <li>{{ IP::devLink('IP-273') }} - Link on dashboard now works with installs on sub-directory</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v131">
            v1.3.1 <span class="released">released 04/14/2015</span>
        </div>
        <div id="v131" class="panel-body collapse">
            <p>Bugs</p>
            <ul>
                <li>Product names are now properly escaped</li>
                <li>PDF password issues have been resolved</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v130">
            v1.3.0 <span class="released">released 04/12/2015</span>
        </div>
        <div id="v130" class="panel-body collapse">
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

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v121">
            v1.2.1 <span class="released">released 03/08/2015</span>
        </div>
        <div id="v121" class="panel-body collapse">
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

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v120">
            v1.2.0 <span class="released">released 01/27/2015</span>
        </div>
        <div id="v120" class="panel-body collapse">
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

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v112">
            v1.1.2 <span class="released">released 01/27/2015</span>
        </div>
        <div id="v112" class="panel-body collapse">
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

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v111">
            v1.1.1 <span class="released">released 12/21/2014</span>
        </div>
        <div id="v111" class="panel-body collapse">
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

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v110">
            v1.1.0 <span class="released">released 11/09/2014</span>
        </div>
        <div id="v110" class="panel-body collapse">
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