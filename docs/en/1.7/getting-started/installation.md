# Installation

For those of you comfortable with installing web applications, installing InvoicePlane should take 5 minutes or
less.

1. [Download](https://invoiceplane.com/downloads) and extract the archive.
2. Create an empty database on your web server.
3. Upload the files to your web server, either into a subdirectory or into the public root of the web server.
4. Make a copy of the `ipconfig.php.example` file and rename the copy to `ipconfig.php`
5. Open the `ipconfig.php` file and add your URL in it like described in the file.
6. Comment out the first line of the `ipconfig.php` file by adding a `#` at the beginning of the line as described at **pt. 2** [here](updating-ip#160-2-replace-files)
7. Run the InvoicePlane installer from your web browser and follow his instructions: `http://your-domain.com/index.php/setup`

Once the installer finishes, the installation is complete and you may log into InvoicePlane using the email address and password you chose during installation. The setup wizard is automatically disabled after a successful installation — navigating to `/index.php/setup` afterwards will return a 403 error.

## Run InvoicePlane in a sub directory

If you want to run InvoicePlane in a sub directory (e.g. `http://yourdomain.com/invoices/`) you have
to modify the `.htaccess` file which is located in the root directory. You must add the line

```
RewriteBase /sub-directory
```

where `sub-directory` is the directory you want to use. The content of the file should look like this:

```
RewriteEngine on
RewriteBase /sub-directory
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule . index.php [L]
```

After that, open your `ipconfig.php` file and add the sub directory to your URL like this:

```
http://your-domain.com/sub-directory
```

Notice that there is **no** trailing slash.

## Remove index.php from the URL

Please notice that this step is entirely optional and does not affect the application in any way.

1. Make sure that [mod\_rewrite](https://httpd.apache.org/docs/2.4/mod/mod_rewrite.html) is enabled on your web
   server.
2. Open the file `ipconfig.php`
3. Search for `REMOVE_INDEXPHP=false` in this file and replace it with
   `REMOVE_INDEXPHP=true`
4. Rename the `htaccess` file to `.htaccess`
