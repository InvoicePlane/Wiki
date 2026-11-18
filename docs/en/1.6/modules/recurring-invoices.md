# Recurring Invoices

Oftentimes instead of sending an invoice as a one time charge, you need to send an email to a client on a
schedule. For example, you may be offering web hosting to your clients, and most likely they are paying for your
services once a month, once a year, etc. It would be a bummer to have to remember to create these invoices every
month, wouldn't it? InvoicePlane can keep this sorted for you.

## Requirements

For recurring invoices to generate properly, you must create a [CRON job](/en/1.6/help/setup_cron) or
a scheduled task that opens the following URL once per day:

```
http://your-domain.com/invoices/cron/recur/your-cron-key-here
```

Replace `your-cron-key-here` with the generated cron key in [System
Settings](/en/1.6/settings/general).

## Create a recurring Invoice

To create an invoice which will automatically recur at a specific frequency, the first step is to create the
first invoice and get it sent to your client as you normal would. Once the first invoice has been created, it
can be set up as a recurring invoice by selecting `Create Recurring` from the `Options`
menu.

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_invoices_make_recurring.jpg)](https://invoiceplane.com/content/screenshots/web/ip_invoices_make_recurring.jpg)

The invoice can be set to recur every week, month, year, quarter or six months. Since the first invoice has
already been created, the start date should be set to the next date this particular invoice should recur on.
Generally the start date should be a date in the future. If the invoice should stop recurring on a particular
date, then enter an end date as well. If the invoice should recur perpetually, then leave the end date
empty.

## Viewing Recurring Invoices

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_invoices_recurring.jpg)](https://invoiceplane.com/content/screenshots/web/ip_invoices_recurring.jpg)

The list of recurring invoices displays each recurring invoice set up in your system. Recurring invoices may be
stopped or deleted from the `Options` button in the list of recurring invoices.
