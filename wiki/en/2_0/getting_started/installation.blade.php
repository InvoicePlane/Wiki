@extends('layouts.master')

@section('title')
    Installation
@endsection

@section('content')

    <h2 class="page-title">Installation</h2>

    <ul>
        <li><a href="#how-to-install-invoiceplane">How to Install Invoiceplane</a></li>
        <li><a href="#how-to-install-an-add-on">How to Install an Add-on</a></li>
    </ul>

    <hr>

    <span class="anchor" id="how-to-install-invoiceplane"></span>
    <h3>How to Install InvoicePlane</h3>

    <b>Step 1: Download the install package</b>
    <p>Download the latest version of InvoicePlane 2 from <a href="https://invoiceplane.com/downloads">invoiceplane.com/downloads</a>. Save it locally to your computer.</p>

    <b>Step 2: Unzip the install package</b>
    <p>Navigate to the downloaded install package and unzip the contents.</p>

    <b>Step 3: Create a database</b>

    <p>
        Using phpMyAdmin (or whatever tool you use to manage your MySQL databases with), create a new, empty database to
        use with InvoicePlane. Depending on your web host, you may create new databases from within your hosting control
        panel.
        If you are unsure how to create an empty database, contact your web host or system administrator.
    </p>

    <b>Step 4: Database configuration</b>

    <p>
        Open config/database.php from the unzipped installer package, edit accordingly for your database settings and
        save the modified file.
    </p>

    <p>
        Typically you should only have to configure the host, database, username and password values to connect to your
        database. Compatibility with MySQL is 100% guaranteed. Other database types may or may not work as expected and
        will no longer be supported.
    </p>

    <pre>
'mysql' => [
    'host'      => 'localhost',
    'database'  => 'invoicePlane',
    'username'  => 'root',
    'password'  => 'password',
    'prefix'    => '',

    'driver'    => 'mysql',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'strict'    => false,
],
</pre>

    <b>Step 5: Upload the files to your server</b>

    <p>
        Upload the unzipped files from your computer to a new, empty folder on your server. It is recommended that you
        use a standard FTP program such as<a href="https://filezilla-project.org/download.php?type=client"
                                             target="_blank">FileZilla</a> to upload the files to your server. This
        initial upload may take a few minutes to complete.
    </p>

    <b>Step 6: Set folder permissions</b>

    <p>Apply recursive write permissions to the following folders (including all the folders and files contained
        within):</p>

    <ul>
        <li>storage</li>
        <li>bootstrap/cache</li>
    </ul>

    <p>The exact steps to set the appropriate permissions will depend on your web host and server configuration.
        InvoicePlane cannot advise on the exact steps or permissions to apply to make these folders writable. If you
        have questions about this step, please contact your web host or system administrator.</p>

    <b>Step 7: Complete the install</b>

    <p>
        To finalize the installation, visit http://YourInvoicePlaneURL/setup in your web browser. If
        http://YourInvoicePlaneURL/setup
        produces an error, try using http://YourInvoicePlaneURL/index.php/setup instead. This last step of the
        installation process
        will create the required database tables and prompt you for information to create your user account. Once you
        have
        completed this last step, you will be able to log in to your InvoicePlane system.
    </p>

    <hr>

    <span class="anchor" id="how-to-install-an-add-on"></span>
    <h3>How to Install an Add-on</h3>

    <b>Step 1: Download the add-on package</b>
    <p>Log into your account at InvoicePlane.com and download the add-on package to install. Save it locally to your
        computer.</p>

    <b>Step 2: Unzip the add-on package</b>
    <p>Navigate to the downloaded Add-on package and unzip the contents.</p>

    <b>Step 3: Upload the add-on folder to your server</b>
    <p>
        Upload the unzipped add-on folder from your computer to the custom/addons folder on your server. It is
        recommended that you use
        a standard FTP program such as
        <a href="https://filezilla-project.org/download.php?type=client" target="_blank">FileZilla</a> to upload the
        folder
        to your server.
    </p>

    <h4>Step 4: Enable the add-on</h4>
    <p>Log into your InvoicePlane install and go to System -> Add-ons and click the Install button for the add-on. Once
        the add-on is installed, the applicable menu items will appear and the add-on will be usable.</p>

@stop