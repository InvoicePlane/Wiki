<?php
return array(

    /*
     * Installation
     */
    'installation.intro' => 'For those of you comfortable with installing web applications, installing InvoicePlane should take 5 minutes or less.',
    'installation.step_1' => '<a href="https://invoiceplane.com/downloads">Download</a> and unzip the InvoicePlane full install package.',
    'installation.step_2' => 'Create an empty database on your web server.',
    'installation.step_3' => 'Upload the InvoicePlane files to your web server, either into its own subdirectory or into the public root of the web server.',
    'installation.step_4' => 'Run the InvoicePlane installer from your web browser and follow his instructions: <code>http://your-domain.com/setup</code>',
    'installation.subdomain_notice' => 'If you want to install InvoicePlane in a subdirectory please follow <a href="https://community.invoiceplane.com/t/solved-installation-help/42/6">these instructions</a>.',
    'installation.final_notice' => 'Once the installer finished, the installation is complete and you may log into InvoicePlane using the email address and password you have chosen during the installation.',

    /*
     * Move from FusionInvoice
     */
    'move_from_fi.intro' => 'If you used FusionInvoice v.1x to manage your invoices you can migrate to InvoicePlane as the development continues.
Follow these steps to migrate your installation.',
    'move_from_fi.make_full_backup' => 'Make a full Backup',
    'move_from_fi.make_full_backup.text' => 'Actually you don\'t have to make a full backup of your FusionInvoice setup but we advise to do so. We can not guarantee that the <a href="https://github.com/InvoicePlane/Migrationtool" >Migrationtool</a> is working without problems.<br/>Make a complete copy of the folder that holds your installation.',

    'move_from_fi.use_migrationtool' => 'Use the Migrationtool',
    'move_from_fi.use_migrationtool.step_1' => '<a href="https://github.com/InvoicePlane/Migrationtool/archive/master.zip" >Download the Migrationtool</a> and unzip it to any directory on your webserver or your local machine.',
    'move_from_fi.use_migrationtool.step_2' => 'If you want to run the tool in a subdirectory please set the directory in the <code>config.php</code> file.',
    'move_from_fi.use_migrationtool.subdir_notice' => 'Please do <b>not</b> use multiple directories like <code>yourdomain.com/tools/migration/migrationtool</code> as the tool only supports one directory at the moment.',

    'move_from_fi.run_updates' => 'Run the InvoicePlane Updates',
    'move_from_fi.run_updates.text' => 'After converting the database open the setup wizard of your InvoicePlane installation located at <code>yourdomain.com/setup</code>. Follow the instructions and the setup will run any necessary database updates.',

    /*
     * Quickstart
     */
    'quickstart.login' => 'Logging In',
    'quickstart.login.wo_subdir' => 'If InvoicePlane was installed into the root of your web server:<br/>
<code>http://www.your-domain.com</code>',
    'quickstart.login.w_subdir' => 'If InvoicePlane was installed into its own subdirectory of your web server:<br/>
<code>http://www.your-domain.com/the-subdirectory</code>',

    'quickstart.add_client' => 'Adding a Client',
    'quickstart.add_client.text' => 'Click Clients from the main menu at the top of the page and select Add Client. Fill in as much information as needed and submit the form.',
    'quickstart.add_client.link' => 'Click here for more information about client management',

    'quickstart.create_invoice' => 'Creating an Invoice',
    'quickstart.create_invoice.text' => 'Click Invoices from the main menu at the top of the page and select Create Invoice. Start typing the client name into the Client box. If the client already exists in InvoicePlane, select the client from the list which appears after you start typing. If the client does not already exist in InvoicePlane, continue typing the client\'s name and that client will be added as a new record. Choose the invoice date and invoice group and submit the form.',
    'quickstart.create_invoice.text2' => '
Press the Add Item button near the top right of the page to add as many items to the invoice as needed. Fill in each of the line items and press the Save button near the top right of the page.',

    'quickstart.sending_invoice' => 'Sending an Invoice',
    'quickstart.sending_invoice.text' => 'If viewing a list of invoices, click the Options button on the row of the invoice to send. If viewing a single invoice, click the Options button near the top right of the page. Select Send Email from the Options button, review the information and submit the form. The client will receive an email with the invoice attached as a PDF.',

    'quickstart.invoice.link' => 'Click here for more information about invoices',

    'quickstart.entering_payments' => 'Entering a Payment',
    'quickstart.entering_payments.offline' => 'Offline payments are entered by clicking Payments from the main menu at the top of the page and selecting Enter Payment. Fill in the appropriate information and submit the form to enter the payment.',
    'quickstart.entering_payments.online' => 'Online payments allow a client to pay their invoice online. When an online payment occurs, the payment is automatically entered back into InvoicePlane, eliminating the need to manually enter an offline payment. Online payments require additional setup before they can be used.',
    'quickstart.entering_payments.link' => 'Click here for more information about payments',

    /*
     * Requirements
     */
    'requirements.intro' => 'If you want to use InvoicePlane you have to follow these requirements:',
    'requirements.webserver' => 'A webserver / webhost with the following specifications:',
    'requirements.mycrypt' => 'mCrypt Extension activated (<a href="http://aryo.lecture.ub.ac.id/easy-install-php-mcrypt-extension-on-ubuntu-linux/">How-To</a>)',
    'requirements.web_browser' => 'And a modern and up-to-date web browser.',
);
