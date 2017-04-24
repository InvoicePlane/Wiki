@extends('layouts.master')

@section('title')
    Customize Templates
@endsection

@section('content')

    <h2 class="page-title">Customize Templates</h2>

    <p>For the customization you just need some little knowledge of HTML and CSS. PHP knowledge is not needed by
        default but may help if you want to achieve special layouts or functions.</p>

    <div class="alert alert-warning">
        Please remember: Before doing any customizations, make a copy of a default template! If you make changes in the
        default templates they will be overwritten on updates.
    </div>

    <div class="alert alert-info">
        Hint: PDF templates will be generated with a PDF engine called mPDF. This means that some styles may not work
        because of conversion from HTML to PDF. If you need help with styling please refer to the <a
                href="https://mpdf.github.io/" class="ext">mPDF documentation</a>.
    </div>

    <h3 id="look-feel">
        Customize the Look and Feel <?php IP::headlineLink('/en/1.5/templates/customize-templates#look-feel'); ?>
    </h3>

    <p>First of all please remember that there is a basic styling for each template. The files use two CSS stylesheets
        and some hardcoded styles. If you want to customize your template you should make changes in the hardcoded part
        which means: edit the content between <code>&lt;style&gt;</code> and <code>&lt;/style&gt;</code> only. Do not
        edit the templates.css as changes will be overwritten on updates.</p>

    <h3 id="first-steps">
        First Steps <?php IP::headlineLink('/en/1.5/templates/customize-templates#first-steps'); ?>
    </h3>

    <p>InvoicePlane already provides a lot of data for all templates. The table below gives you an overview on which
        variables are available in the templates.</p>

    <h4>Invoice Templates</h4>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Variable</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><code>$invoice</code></td>
                <td>It holds data about the invoice itself, the user that created the invoice and the client that is
                    selected for the invoice. It also provides all payments if there are any in the database.
                </td>
            </tr>
            <tr>
                <td><code>$invoice_tax_rates</code></td>
                <td>Provides information about all tax rates that were applied to the invoice</td>
            </tr>
            <tr>
                <td><code>$items</code></td>
                <td>Contians all invoice items with their corresponding data.</td>
            </tr>
            <tr>
                <td><code>$payment_method</code></td>
                <td>Provides information about the selected payment method.</td>
            </tr>
            <tr>
                <td><code>$custom_fields</code></td>
                <td>Contians custom fields for the invoice, the user, the client and if available for the parent
                    quote.
                </td>
            </tr>
            <tr>
                <td><code>$show_item_discounts</code></td>
                <td>Is true if there are any items with a discount, is false if not. Can be used to display the
                    additional discount column only if there are discounts to display.
                </td>
            </tr>
        </table>
    </div>

    <h4>Quote Templates</h4>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Variable</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><code>$quote</code></td>
                <td>It holds data about the quotes itself, the user that created the quote and the client that is
                    selected for the quotes.
                </td>
            </tr>
            <tr>
                <td><code>$quote_tax_rates</code></td>
                <td>Provides information about all tax rates that were applied to the quote.</td>
            </tr>
            <tr>
                <td><code>$items</code></td>
                <td>Contians all quote items with their corresponding data.</td>
            </tr>
            <tr>
                <td><code>$custom_fields</code></td>
                <td>Contians custom fields for the quote, the user and the client.</td>
            </tr>
            <tr>
                <td><code>$show_item_discounts</code></td>
                <td>Is true if there are any items with a discount, is false if not. Can be used to display the
                    additional discount column only if there are discounts to display.
                </td>
            </tr>
        </table>
    </div>

    <p>If you want to know which data is available in every variable go to the bottom of the template and add the
        following code directly above the <code>&lt;/body&gt;</code> tag. Replace <em>invoice</em> with the name of the
        variable your want to look up.</p>

    <pre>&lt;pre&gt;&lt;?php print_r($invoice); ?&gt;&lt;/pre&gt;</pre>

    <p>If you load the template now you will see something like this but with hundred more lines:</p>

    <pre><code>stdClass Object
(
 [client_id] => 13
 [invoice_id] => 24
 [user_id] => 2
 [invoice_group_id] => 8
...</code></pre>

    <p>This is the list of all available variables where the part in the brackets (e.g. <code>invoice_id</code>) is the
        name of the variable and the part after the <code>=></code> is the content of the variable.</p>

    <h3 id="custom-fields">
        Adding Custom Fields <?php IP::headlineLink('/en/1.5/templates/customize-templates#custom-fields'); ?>
    </h3>

    <p>Custom fields work in a special way. As custom fields are added by the user there is no way to define which
        fields will be available. Therefore InvoicePlane searches for all available custom fields before printing the
        template. All fields are stored in the <code>$custom_fields</code> variable that may look like this:</p>

    <pre><code>Array
(
    [invoice] => Array
        (
            [Sent at] => 2016-11-15
        )
    [client] => Array
        (
            [CRM ID] => 346999-13400
            [has Supervisor] => 1
            [Supervisors] => 1
        )
    [user] => Array
        ()
    [quote] => Array
        (
            [Sent at] => 2016-11-10
            [Special discount offered?] => 0
        )
)</code></pre>

    <p>The <code>$custom_fields</code> variable is a collection of all custom field types that group all available
        custom fields. As you can see in the example, the invoice has a custom field named <em>Sent at</em>, the client
        has a field called <em>CRM ID</em> and so on.</p>

    <p>To access a specific custom field, you have to use the followng code example:</p>

    <pre><code>&lt?php echo $custom_fields['client']['CRM ID'] ?&gt</code></pre>

    <p>where <em>client</em> should be the group and <em>CRM ID</em> should be the label of your custom field. Using the
        code example would simply output <code>346999-13400</code> in your template.</p>

    <h4 id="custom-fields-boolean">
        Yes / No Custom Fields <?php IP::headlineLink('/en/1.5/templates/customize-templates#custom-fields-boolean'); ?>
    </h4>

    <p>Yes/no fields will have the value <code>1</code> for yes and <code>0</code> for no. This way you can use the custom field in conditional statements like this:</p>

    <pre><code>&lt?php if ($custom_fields['quote']['Special discount offered?']) {
  // Do something here if yes was selected for the 'Special discount offered?' custom field
} ?%gt</code></pre>

    <h3 id="code-examples">
        Code Examples <?php IP::headlineLink('/en/1.5/templates/customize-templates#code-examples'); ?>
    </h3>

    <p>Here is a list of some examples for code that can be used to display variables.<br/>
        Replace <code>invoice</code> with <code>quote</code> when editing quote templates.<br/>
        Replace <code>variable_name</code> with the actual name of the variable.</p>

    <div class="table-responsive">
        <table class="table table-bordered table-condensed">
            <thead>
            <tr>
                <th>Description</th>
                <th>Code</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <b>Add a new Variable</b><br/>
                    To add a new variable to the template. Replace <code>variable_name</code> with the actual name of
                    the variable.
                </td>
                <td>
                    <pre>&lt;?php echo $invoice->variable_name; ?&gt;</pre>
                </td>
            </tr>
            <tr>
                <td><b>Format amounts</b><br>
                    If you want to display amounts you have to use this code in order to display the amount in the
                    correct format.
                </td>
                <td>
                    <pre>&lt;?php echo format_currency($invoice->variable_name); ?&gt;</pre>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Conditional Statements</b><br/>
                    Only display code if a variable is not empty. This could be used for example if you don't want to
                    display the taxes column if there are no taxes.
                </td>
                <td>
                    <pre>&lt;?php if(!empty($invoice->variable_name)): ?&gt;
-- display any HTML or variables here --
&lt;?php endif; ?&gt;</pre>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Display the Invoice Logo</b><br/>
                    The logo can be set in the System Settings.
                </td>
                <td>
                    <pre>&lt;?php echo invoice_logo_pdf(); ?&gt;</pre>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <h3 id="debugging">
        Debugging Templates <?php IP::headlineLink('/en/1.5/templates/customize-templates#debugging'); ?>
    </h3>

    <p>The PDF engine is not that good in handling errors or HTML that is broken due to PHP errors. You may get output
        like this:</p>

    <pre><code>Severity: Notice
Message: Undefined offset: 2
Filename: src/Tag.php
Line Number: 1806
...</code></pre>

    <p>To know what is wrong with your template, you have to add a small code line in your template helper. Open the
        file <code>application/helpers/pdf_helper.php</code> and add</p>

    <p>Place <code>print_r($html);exit;</code> at line 98 for invoice templates.</p>
    <p>Place <code>print_r($html);exit;</code> at line 250 for quote templates.</p>

    <p>This will output the plain HTML that will be used to generate your PDF files. If there are any problems with
        missing or faulty variables or wrong PHP code, you should see the corresponding output here.</p>

    <?php
    $article_pagination = array(
        'previous' => array(
            'url' => '/en/1.5/templates/using-templates',
            'title' => 'Using Templates',
            'type' => 'article'
        ),
        'next' => array(
            'url' => '/en/1.5/system/',
            'title' => 'System',
            'type' => 'section'
        )
    );
    ?>

@stop