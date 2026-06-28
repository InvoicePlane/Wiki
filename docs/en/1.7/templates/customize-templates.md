# Customize Templates

For the customization you just need some little knowledge of HTML and CSS. PHP knowledge is not needed by
default but may help if you want to achieve special layouts or functions.

> **Warning:**
> Please remember: Before doing any customizations, make a copy of a default template! If you make changes in the
> default templates they will be overwritten on updates.

> **Note:**
> Hint: PDF templates will be generated with a PDF engine called mPDF. This means that some styles may not work
> because of conversion from HTML to PDF. If you need help with styling please refer to the [mPDF documentation](https://mpdf.github.io/).

## Customize the Look and Feel

First of all please remember that there is a basic styling for each template. The files use two CSS stylesheets
and some hardcoded styles. If you want to customize your template you should make changes in the hardcoded part
which means: edit the content between `<style>` and `</style>` only. Do not
edit the templates.css as changes will be overwritten on updates.

## First Steps

InvoicePlane already provides a lot of data for all templates. The table below gives you an overview on which
variables are available in the templates.

### Invoice Templates

| Variable | Description |
| --- | --- |
| `$invoice` | It holds data about the invoice itself, the user that created the invoice and the client that is selected for the invoice. It also provides all payments if there are any in the database. |
| `$invoice_tax_rates` | Provides information about all tax rates that were applied to the invoice |
| `$items` | Contains all invoice items with their corresponding data. |
| `$payment_method` | Provides information about the selected payment method. |
| `$custom_fields` | Contains custom fields for the invoice, the user, the client and if available for the parent quote. |
| `$show_item_discounts` | Is true if there are any items with a discount, is false if not. Can be used to display the additional discount column only if there are discounts to display. |

### Quote Templates

| Variable | Description |
| --- | --- |
| `$quote` | It holds data about the quotes itself, the user that created the quote and the client that is selected for the quotes. |
| `$quote_tax_rates` | Provides information about all tax rates that were applied to the quote. |
| `$items` | Contains all quote items with their corresponding data. |
| `$custom_fields` | Contains custom fields for the quote, the user and the client. |
| `$show_item_discounts` | Is true if there are any items with a discount, is false if not. Can be used to display the additional discount column only if there are discounts to display. |

If you want to know which data is available in every variable go to the bottom of the template and add the
following code directly above the `</body>` tag. Replace *invoice* with the name of the
variable your want to look up.

```
<pre><?php print_r($invoice); ?></pre>
```

If you load the template now you will see something like this but with hundred more lines:

```
stdClass Object
(
 [client_id] => 13
 [invoice_id] => 24
 [user_id] => 2
 [invoice_group_id] => 8
...
```

This is the list of all available variables where the part in the brackets (e.g. `invoice_id`) is the
name of the variable and the part after the `=>` is the content of the variable.

## Adding Custom Fields

Custom fields work in a special way. As custom fields are added by the user there is no way to define which
fields will be available. Therefore InvoicePlane searches for all available custom fields before printing the
template. All fields are stored in the `$custom_fields` variable that may look like this:

```
Array
(
    [invoice] => Array
        (
            [Sent at] => 2016-11-15
            [Contributors] => [
                0 => Marty McFly
                1 => Jennifer McFly
            ]
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
)
```

The `$custom_fields` variable is a collection of all custom field types that group all available
custom fields. As you can see in the example, the invoice has a custom field named *Sent at*, the client
has a field called *CRM ID* and so on.

To access a specific custom field, you have to use the followng code example:

```
<?php echo $custom_fields['client']['CRM ID'] ?>
```

where *client* should be the group and *CRM ID* should be the label of your custom field. Using the
code example would simply output `346999-13400` in your template.

### Yes / No Custom Fields

Yes/no fields will have the value `1` for yes and `0` for no. This way you can use the custom field in conditional statements like this:

```
<?php if ($custom_fields['quote']['Special discount offered?']) {
  // Do something here if yes was selected for the 'Special discount offered?' custom field
} ?>
```

## Code Examples

Here is a list of some examples for code that can be used to display variables.
Replace `invoice` with `quote` when editing quote templates.
Replace `variable_name` with the actual name of the variable.

| Description | Code |
| --- | --- |
| **Add a new Variable**  To add a new variable to the template. Replace `variable_name` with the actual name of the variable. | ``` <?php echo $invoice->variable_name; ?> ``` |
| **Format amounts**  If you want to display amounts you have to use this code in order to display the amount in the correct format. | ``` <?php echo format_currency($invoice->variable_name); ?> ``` |
| **Conditional Statements**  Only display code if a variable is not empty. This could be used for example if you don't want to display the taxes column if there are no taxes. | ``` <?php if(!empty($invoice->variable_name)): ?> -- display any HTML or variables here -- <?php endif; ?> ``` |
| **Display the Invoice Logo**  The logo can be set in the System Settings. | ``` <?php echo invoice_logo_pdf(); ?> ``` |

## Debugging Templates

The PDF engine is not that good in handling errors or HTML that is broken due to PHP errors. You may get output
like this:

```
Severity: Notice
Message: Undefined offset: 2
Filename: src/Tag.php
Line Number: 1806
...
```

To know what is wrong with your template, you have to add a small code line in your template helper. Open the
file `application/helpers/pdf_helper.php` and add

Place `print_r($html);exit;` at line 98 for invoice templates.

Place `print_r($html);exit;` at line 250 for quote templates.

This will output the plain HTML that will be used to generate your PDF files. If there are any problems with
missing or faulty variables or wrong PHP code, you should see the corresponding output here.
