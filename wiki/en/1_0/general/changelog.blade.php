@extends('layouts.master')

@section('title')
    Changelog
@endsection

@section('content')

    <h2 class="page-title">Changelog</h2>

    <div class="changelog">

        <div class="alert alert-info">Click on an older version to show the detailed changelog.</div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v148">
                v1.4.8 <span class="released">released 31/07/2016</span>
            </div>
            <div id="v148" class="card-block collapse in">
                <p>Improvement</p>
                <ul>
                    <li>{{ IP::devLink('IP-255') }} - Do not generate invoice number for draft invoices</li>
                    <li>{{ IP::devLink('IP-425') }} - Improve language handling and displaying for empty translations</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{{ IP::devLink('IP-424') }} - item_subtotal in default template</li>
                    <li>{{ IP::devLink('IP-428') }} - Subfolder detection not working on Windows</li>
                    <li>{{ IP::devLink('IP-430') }} - Hide inactive clients in client list</li>
                    <li>{{ IP::devLink('IP-432') }} - SQL field types lead to problems with some MySQL versions</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v147">
                v1.4.7 <span class="released">released 02/07/2016</span>
            </div>
            <div id="v147" class="card-block collapse">
                 <p>New Features</p>
                <ul>
                    <li>{{ IP::devLink('IP-412') }} - Implementation ZUGFeRD XML for PDFs</li>
                </ul>
                <p>Improvement</p>
                <ul>
                    <li>{{ IP::devLink('IP-104') }} - Custom fields are not copied when Invoice is duplicated</li>
                    <li>{{ IP::devLink('IP-255') }} - Do not generate invoice number for draft invoices</li>
					<li>{{ IP::devLink('IP-322') }} - Invoice item_name database field should be larger</li>
                    <li>{{ IP::devLink('IP-404') }} - mPDF does not show image errors</li>
                    <li>{{ IP::devLink('IP-406') }} - Update the web preview for invoices and quotes</li>
					<li>{{ IP::devLink('IP-407') }} - Add attachments to the web views for invoices and quotes</li>
                    <li>{{ IP::devLink('IP-408') }} - Add reference to products to items</li>
                    <li>{{ IP::devLink('IP-417') }} - Improve product database handling</li>
					<li>{{ IP::devLink('IP-421') }} - Allow items to have empty description, quantity and price</li>
                    <li>{{ IP::devLink('IP-422') }} - Improve session security</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{{ IP::devLink('IP-301') }} - Special characters in Client Name breaks invoice/quote creation</li>
                    <li>{{ IP::devLink('IP-303') }} - Incorrect decimal value: '' for column 'item_discount_amount'</li>
                    <li>{{ IP::devLink('IP-330') }} - Quotes still use the "Quote Number" translation string</li>
                    <li>{{ IP::devLink('IP-386') }} - Discounts are lost when converting quote to invoice</li>
                    <li>{{ IP::devLink('IP-399') }} - Description of Paypal appear "0"</li>
                    <li>{{ IP::devLink('IP-400') }} - PDF Report has unwanted file security Password</li>
                    <li>{{ IP::devLink('IP-401') }} - Forgot Password does not honor System Mail Settings</li>
                    <li>{{ IP::devLink('IP-413') }} - Tax does not get copied on recurring invoices</li>
                    <li>{{ IP::devLink('IP-419') }} - Don’t mark drafts with invoice_total == 0 as paid</li>
                </ul>
            </div>
        </div>
		
		<div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v146">
                v1.4.6 <span class="released">released 02/07/2015</span>
            </div>
            <div id="v146" class="card-block collapse">
                <p>Improvement</p>
                <ul>
                    <li>{{ IP::devLink('IP-383') }} - Update lib_mysql to use mysqli</li>
                    <li>{{ IP::devLink('IP-384') }} - Add a debug mode to make error reporting easier</li>
					<li>{{ IP::devLink('IP-385') }} - Optimize the login and password reset handling</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{{ IP::devLink('IP-310') }} - Taxes and products do not respect separator and decimal</li>
                    <li>{{ IP::devLink('IP-379') }} - Quotes / invoices sums are not calculated</li>
                    <li>{{ IP::devLink('IP-380') }} - Assets were not updated in the setup layout</li>
                    <li>{{ IP::devLink('IP-381') }} - Datepicker not working in some modals</li>
                </ul>
            </div>
        </div>
		
		<div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v145">
                v1.4.5 <span class="released">released 01/31/2015</span>
            </div>
            <div id="v145" class="card-block collapse">
                <p>Improvement</p>
                <ul>
                    <li>{{ IP::devLink('IP-356') }} - Hide discount columns on PDF templates if no item has a discount</li>
                    <li>{{ IP::devLink('IP-357') }} - Disable URL rewriting by default to prevent problems with .htaccess</li>
                    <li>{{ IP::devLink('IP-358') }} - Optimize the PDF templates</li>
					<li>{{ IP::devLink('IP-377') }} - Update all assets</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{{ IP::devLink('IP-359') }} - Fix for incorrect integer value: '' for column 'payment_method'</li>
                    <li>{{ IP::devLink('IP-361') }} - htmlspecialchars() missing on client edit screen</li>
                    <li>{{ IP::devLink('IP-363') }} - Custom title still missing for the login page</li>
                    <li>{{ IP::devLink('IP-373') }} - Templates displays wrong zips from user / client</li>
                    <li>{{ IP::devLink('IP-374') }} - Model declarations are not compatible with Response_Model</li>
                    <li>{{ IP::devLink('IP-375') }} - Dashboard calculates only the last 10 overdue invoices</li>
                    <li>{{ IP::devLink('IP-376') }} - Remove deprecated / unnecessary code from the layout</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v144">
                v1.4.4 <span class="released">released 12/13/2015</span>
            </div>
            <div id="v144" class="card-block collapse">
                <p>Improvement</p>
                <ul>
                    <li>{{ IP::devLink('IP-293') }} - Custom title for public view of quotes / invoices</li>
                    <li>{{ IP::devLink('IP-312') }} - Current logged in user now displayed</li>
                    <li>{{ IP::devLink('IP-355') }} - Overhaul the PDF templates</li>
					<li>{{ IP::devLink('IP-333') }} - Upgrade of the PHPMailer library</li>
                    <li>Various other code improvements and smaller corrections</li>
                </ul>
                <p>Fixed Bugs</p>
                <ul>
                    <li>{{ IP::devLink('IP-291') }} - Let CodeIgniter also accept new domain names</li>
                    <li>{{ IP::devLink('IP-306') }} - PDF: invoice details not properly aligned</li>
                    <li>{{ IP::devLink('IP-308') }} - Invoice in archive was empty (zero bytes)</li>
                    <li>{{ IP::devLink('IP-310') }} - Taxes and products didn't respect separator and decimal</li>
                    <li>{{ IP::devLink('IP-315') }} - Array definitions were incompatible with PHP &lt; 5.4</li>
                    <li>{{ IP::devLink('IP-328') }} - Fixed Problems with functions in number_helper.php</li>
                    <li>{{ IP::devLink('IP-331') }} - Emails for recurring invoices didn't process CSS styles</li>
                    <li>{{ IP::devLink('IP-332') }} - Missing lang file when you have set other language</li>
                    <li>{{ IP::devLink('IP-336') }} - Editing a product caused the price to change</li>
                    <li>{{ IP::devLink('IP-346') }} - Create payment - Payment method will not be saved</li>
                    <li>{{ IP::devLink('IP-349') }} - Custom field input length increased</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v143">
                v1.4.3 <span class="released">released 06/21/2015</span>
            </div>
            <div id="v143" class="card-block collapse">
                <p>Fixed Bugs</p>
                <ul>
                    <li>{{ IP::devLink('IP-304') }} - Fixed bug where password fields were empty on settings pages</li>
                    <li>{{ IP::devLink('IP-303') }} - Fixed bug where quotes or invoices couldn't be saved because of an
                        'Incorrect decimal value'
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v142">
                v1.4.2 <span class="released">released 06/14/2015</span>
            </div>
            <div id="v142" class="card-block collapse">
                <p>Improvements</p>
                <ul>
                    <li>{{ IP::devLink('IP-302') }} - Increased the loading overlay timeout</li>
                </ul>

                <p>Fixed Bugs</p>
                <ul>
                    <li>{{ IP::devLink('IP-299') }} - Fixed bug where invoices no longer accepted item prices between 0
                        and 1 (e.g. 0,75)
                    </li>
                    <li>{{ IP::devLink('IP-300') }} - Fixed bug with BCC for emails</li>
                    <li>{{ IP::devLink('IP-301') }} - Fixed bug where special characters in client names broke
                        invoice/quote creation
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v141">
                v1.4.1 <span class="released">released 06/07/2015</span>
            </div>
            <div id="v141" class="card-block collapse">
                <p>Fixed Bugs</p>
                <ul>
                    <li>{{ IP::devLink('IP-286') }} - Discount input fields are now disabled on read-only invoices</li>
                    <li>{{ IP::devLink('IP-287') }} - “Create product” without a valid “Family” should not throw a
                        SQL/PHP error
                    </li>
                    <li>{{ IP::devLink('IP-288') }} - Fix for wrong discount calculations, now working without invoice
                        taxes
                    </li>
                    <li>{{ IP::devLink('IP-290') }} - Fix where the payment method couldn't be changed if empty</li>
                    <li>{{ IP::devLink('IP-292') }} - New guest users can now be added without required country field
                    </li>
                    <li>{{ IP::devLink('IP-294') }} - Invoices can't be saved now with completely empty items</li>
                    <li>{{ IP::devLink('IP-295') }} - Fix where items can be deleted even if in read-only</li>
                    <li>{{ IP::devLink('IP-296') }} - Fix for errors because of missing language strings</li>
                    <li>{{ IP::devLink('IP-297') }} - Fix for errors because of undefined variables</li>
                    <li>{{ IP::devLink('IP-298') }} - Loading screen was optimized</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v140">
                v1.4.0 <span class="released">released 05/20/2015</span>
            </div>
            <div id="v140" class="card-block collapse">
                <p>New Features</p>
                <ul>
                    <li>{{ IP::devLink('IP-86') }} - Option to enter discounts on quotes / invoices</li>
                    <li>{{ IP::devLink('IP-202') }} - Invoice PDFs will now be archived</li>
                    <li>{{ IP::devLink('IP-236') }} - Option to send all outgoing emailt as BCC to the admin</li>
                    <li>{{ IP::devLink('IP-237') }} - Option to set pre-set payment method</li>
                    <li>{{ IP::devLink('IP-211') }} - Attachments for emails</li>
                    <li>{{ IP::devLink('IP-215') }} - Option to hcange the client on draft invoices / quotes</li>
                    <li>{{ IP::devLink('IP-252') }} - Option to add custom language strings</li>
                    <li>{{ IP::devLink('IP-269') }} - Duplicate "Add new Row / Product" buttons on bottom of item
                        table
                    </li>
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

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v133">
                v1.3.3 <span class="released">released 05/06/2015</span>
            </div>
            <div id="v133" class="card-block collapse">
                <p>Fixed Bugs</p>
                <ul>
                    <li>{{ IP::devLink('IP-278') }} - Payment methods can't be modified after saving</li>
                    <li>{{ IP::devLink('IP-277') }} - Product families can't be modified after saving</li>
                    <li>{{ IP::devLink('IP-276') }} - Email Templates can't be modified after saving</li>
                    <li>{{ IP::devLink('IP-275') }} - Clients can't be modified after saving</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v132">
                v1.3.2 <span class="released">released 05/03/2015</span>
            </div>
            <div id="v132" class="card-block collapse">
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

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v131">
                v1.3.1 <span class="released">released 04/14/2015</span>
            </div>
            <div id="v131" class="card-block collapse">
                <p>Bugs</p>
                <ul>
                    <li>Product names are now properly escaped</li>
                    <li>PDF password issues have been resolved</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v130">
                v1.3.0 <span class="released">released 04/12/2015</span>
            </div>
            <div id="v130" class="card-block collapse">
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
                v1.2.1 <span class="released">released 03/08/2015</span>
            </div>
            <div id="v121" class="card-block collapse">
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
                v1.2.0 <span class="released">released 01/27/2015</span>
            </div>
            <div id="v120" class="card-block collapse">
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
                v1.1.2 <span class="released">released 01/27/2015</span>
            </div>
            <div id="v112" class="card-block collapse">
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
                v1.1.1 <span class="released">released 12/21/2014</span>
            </div>
            <div id="v111" class="card-block collapse">
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
                v1.1.0 <span class="released">released 11/09/2014</span>
            </div>
            <div id="v110" class="card-block collapse">
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
                v1.0.2 <span class="released">released 08/28/2014</span>
            </div>
            <div id="v102" class="card-block collapse">
                <p>Bugs</p>
                <ul>
                    <li>Hotfix release for issues with tax rates and sum in quotes and invoices.</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#v101">
                v1.0.1 <span class="released">released 08/23/2014</span>
            </div>
            <div id="v101" class="card-block collapse">
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
                v1.0.0 <span class="released">released 07/12/2014</span>
            </div>
            <div id="v100" class="card-block collapse">
                <p>Initial version</p>
            </div>
        </div>

    </div>

@stop