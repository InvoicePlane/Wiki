# General Settings

The general settings page sets a lot of options that will change the look & feel of the whole application or
that are needed for some special purposes.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_settings_general.jpg)](https://invoiceplane.com/content/screenshots/web/ip_settings_general.jpg)

## General settings

| Setting | Description |
| --- | --- |
| Language | Choose the [language](/en/1.6/system/translation-localization) for the application |
| First day of the Week | Choose if the week should start on sunday or monday |
| Default Country | Select the country that will be used automatically when adding clients |
| Date Format | Choose the date format of the application |
| Currency Symbol | Choose the currency symbol like `€` or `$`. You can also use any letters like `AUD` or `CHF` |
| Currency Symbol Placement | Choose if the currency symbol should be placed before or after amounts |
| Thousand Separator | Select if thousands should be separated by `,` or `.` |
| Decimal Point | Select if the decimals point should be `,` or `.` |
| Tax Rate Decimal Places | Select how much placed after the decimal point should be used for tax rates. |

## Dashboard settings

| Setting | Description |
| --- | --- |
| Quote Overview Period | Select the period that should be used for quotes on the quote overview |
| Invoice Overview Period | Select the period that should be used for invoices on the invoice overview |

## Interface settings

| Setting | Description |
| --- | --- |
| Disable the Sidebar | Choose if the sidebar should be disabled |
| Custom Title | Set a custom title which will be shown on browser tabs |
| Use Monospace font for Amounts | Choose if the application should use a monospace font for amounts. Example: `1.345,23 €` |
| Login Logo | Upload an image that will be displayed above the login form.  Recommended size: about 300px width |
| Cron Key | You will need this cron key to setup [recurring invoices](/en/1.6/modules/recurring-invoices). |

## System settings

|  |  |
| --- | --- |
| Send all outgoing emails as BCC to the admin account | If you enable this option **every** outgoing email is sent as an anonymous copy (BCC) to the administrator. The administrator is the user that was created during the InvoicePlane setup. |
| Cron Key | You will need this cron key to setup [recurring invoices](/en/1.6/modules/recurring-invoices) |
| Enable Debug Mode | The debug mode enables logging for the application. The logs can be found in the `/application/logs` folder or in your browser console. |
