# FAQ - Frequently Asked Questions

## General

### Can I sell / redistribute InvoicePlane?

InvoicePlane is a free software and it will never be a commercial product! We
appeal everyone to respect the open source InvoicePlane project and our work and refrain from
selling the application as their own product!
What you can do: offer paid professional support or hosting for InvoicePlane.

However InvoicePlane is an open source software released under [MIT license](http://choosealicense.com/licenses/mit/). This means that you can use
the code *but* the InvoicePlane name and the logo are copyright by Invoiceplane.com and
Kovah.de
This means you **have to** use another name and logo for the product and include the original InvoicePlane license in the code.

For more information about licensing please visit the [InvoicePlane website](https://invoiceplane.com/license-copyright).

## Errors

### You have problems and need help? Use the debug mode.

You have a problem with some errors, you are stuck and need help? We would like to help you but first
we need some help from you: error logs.

1. Enable the debug mode by replacing `ENABLE_DEBUG=false` with
   `ENABLE_DEBUG=true` in the `/ipconfig.php` file.
2. Try again what caused the error, e.g. creating a new invoice which does not work.
3. Get the log files:
   - Open the folder `/application/logs/`, open the log file with the current date
     and copy the whole content.
   - Take a look at your web server error logs.
   - Open the console of your browser ([tutorial](http://webmasters.stackexchange.com/a/77337/20720)), the
     error may be logged there.
4. Save the content of the log files and the output of the browser console to [Paste.InvoicePlane.com](https://paste.invoiceplane.com/) and post this link
   with a detailed description to the [Community
   Forums](https://community.invoiceplane.com).
   You will get further help there.

### I copied InvoicePlane to my webserver but I get blank pages or an error 404 or 500

Please make sure you copied the .htaccess file (hidden file on Unix systems) and you installed and
enabled mod\_rewrite for Apache.

If you want to install InvoicePlane in a sub-directory like `yourdomain.com/invoices/`
please follow the instructions for the [installation in a
subdirectory](/en/1.5/getting-started/installation#subdir).

### There is a large spinning cog () after I clicked a button and now nothing happens

This problem occurs if the application is stuck because of an error. Please follow the instructions
for the [debug mode](#debugmode)

### I can't add more than 3 or 4 items to quotes or invoices

This problem may occurs because of a configuration of your nginx webserver. The server error should
look like this:

```
upstream sent too big header while reading response header from upstream
```

To solve this problem you should try to add / update your nginx configuration with the following
settings:

```
proxy_buffer_size   128k;
proxy_buffers   4 256k;
proxy_busy_buffers_size   256k;
```

or

```
fastcgi_buffer_size 128k;
fastcgi_buffers 4 256k;
fastcgi_busy_buffers_size 256k;
```

Please check [this comment](http://stackoverflow.com/a/27551259/1203515) for
more details.

## Settings

### Where can I set the default invoice / quote groups?

You can set the default invoice / quote groups at `System settings > Invoices > Default Invoice
Group` for invoices and `System settings > Quotes > Default Quote Group` for
quotes.

## Customization

### How can I customize the templates?

You can find all templates in the following directories:

**Invoices**

`/application/views/invoice_templates/`

**Quotes**

`/application/views/quote_templates/`

The templates are using basic HTML, CSS and PHP. If you just want to change the styling you just need
some knowledge of HTML and CSS.
If you want to include Custom Fields into the templates please refer to the [Custom Fields page](/en/1.5/settings/custom-fields#add-to-template).
