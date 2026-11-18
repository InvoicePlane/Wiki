# Email Settings

Before InvoicePlane can send emails you have to configure he email settings here. You can choose between three different ways to send emails.
If you don't want that invoice and quote pdf files are automatically attached to emails disable this feature by changing `Attach Quote/Invoice on email?` to `No`

[![](https://invoiceplane.com/content/screenshots/web_thumb/ip_settings_mail.jpg)](https://invoiceplane.com/content/screenshots/web/ip_settings_mail.jpg)

| Method | Description |
| --- | --- |
| PHP Mail | Uses the built-in email sending method of PHP which allows to send mails without any configuration. |
| Sendmail | Like PHP Mail all emails will be sent without the need to configure anything. Please choose Sendmail only if you are sure that your server has Sendmail installed, enabled and configured because it is possible that your servers OS does not ship with Sendmail by default. |
| SMTP | You can also use a SMTP server to send mails. Using SMTP allows you to send emails via external servers. You will need the SMTP server's hostname, login credentials and the used port and security method. |

## Delivery failures

When an email cannot be delivered, InvoicePlane logs the failure. If you have custom code that calls the internal `phpmail_send()` function, check that it handles a `false` return value — prior to version 1.7 this function always returned `true`, so code written for older versions may assume delivery always succeeded.
