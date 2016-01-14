@extends('layouts.master')

@section('title')
    Customize Templates
@endsection

@section('content')

    <h2 class="page-title">Customize Templates</h2>

    <p>As already mentioned you <em>should</em> customize the template files. They are very basic and may not include
        any new features that were introduced in the latest releases.<br/>
        For the customization you just need some little knowledge of HTML and CSS. PHP knowledge is not needed by
        default but may help if you want to achieve special layouts or functions.</p>

    <div class="alert alert-warning">
        Please remember: Before doing any customizations, make a copy of a default template! If you make changes in the
        default templates they will be overwritten on updates.
    </div>
    <div class="alert alert-info">
        Hint: PDF templates will be generated with a PDF engine called mPDF. This means that some styles may not work
        because of conversion from HTML to PDF. If you need help with styling please refer to the <a
                href="http://mpdf1.com/manual/index.php">mPDF documentation</a>.
    </div>

    <h3 id="look-feel">
        Customize the Look and Feel <?php IP::headlineLink('/en/1.0/templates/customize-templates#look-feel'); ?>
    </h3>

    <p>First of all please remember that there is a basic styling for each template. The files use two CSS stylesheets
        and some hardcoded styles. If you want to customize your template you should make changes in the hardcoded part
        which means: edit the content between <code>&lt;style&gt;</code> and <code>&lt;/style&gt;</code> only. Do not
        edit the templates.css as changes will be overwritten on updates.</p>

    <h3 id="first-steps">
        First Steps <?php IP::headlineLink('/en/1.0/templates/customize-templates#first-steps'); ?>
    </h3>

    <p>Before you start to add any new fields or create conditional statements you should get an overview of which
        variables are availalbe for the quote or invoice. Therefore go to the bottom of the template and add the
        following code directly above the <code>&lt;/body&gt;</code> tag. Replace <em>invoice</em> with <em>quote</em>
        if you edit a quote template.</p>

    <pre>
&lt;pre&gt;&lt;?php print_r($invoice); ?&gt;&lt;/pre&gt;
    </pre>

    <p>If you load the template now you will see something like this but with hundred more lines:</p>

    <pre>
stdClass Object
(
 [invoice_custom_id] => 13
 [invoice_id] => 24
 [invoice_custom_archive_id] =>
 [client_custom_id] => 8
...
    </pre>

    <p>This is the list of all available variables where the part in the brackets (e.g. <code>invoice_id</code>) is the
        name of the variable and the part after the <code>=></code> is the content of the variable.</p>

    <h3 id="code-examples">
        Code Examples <?php IP::headlineLink('/en/1.0/templates/customize-templates#code-examples'); ?>
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
                    If you want to display amounts you have to use this code in order to display the amount in the correct format.
                </td>
                <td>
                    <pre>&lt;?php echo format_currency($invoice->variable_name); ?&gt;</pre>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Conditional Statements</b><br/>
                    Only display code if a variable is not empty. This could be used for example if you don't want to display the taxes column if there are no taxes.
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

    <?php
    $article_pagination = array(
            'previous' => array(
                    'url' => '/en/1.0/templates/using-templates',
                    'title' => 'Using Templates',
                    'type' => 'article'
            ),
            'next' => array(
                    'url' => '/en/1.0/system/',
                    'title' => 'System',
                    'type' => 'section'
            )
    );
    ?>

@stop