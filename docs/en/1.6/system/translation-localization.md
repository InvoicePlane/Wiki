# Translation / Localization

InvoicePlane comes with the English language by default. To contribute to or to download other language packs
please visit the [translation repository](https://crowdin.com/project/invoiceplane).

## Install a new translation

> **Warning:**
> Please notice: some translations are not complete so some texts will be displayed in English. So do not delete
> the english language folder!

1. Download the translation pack from the [translation
   repository](https://crowdin.com/project/invoiceplane)
2. Open the folder of the language you want to install (`de` = German)
3. Copy the folder that should be called something like `de_DE`, `fr_FR` or
   `es_AR`
4. Paste the folder to the following directory of your InvoicePlane installation:
   `/application/language/`
5. Apply the language in your [general settings](/en/1.6/settings/general).

Your folder structure should look like this:

```
├── application/
│   ├── ...
│   ├── language/
│   │   ├── english/
│   │   └── Deutsch/
│   │       ├── custom_lang.php
│   │       ├── ip_lang.php
│   │       ├── merchant_lang.php
│   │       └── ...
│   └── ...
├── assets/
└── ...
```

## Customize translations

You are able to replace all language strings in the application with your own strings. We added a file called `custom_lang.php` which is located in every language folder (see above).

To replace or alter a translation, search for the string in the main language files (ip\_lang.php). You have to copy the whole line with the string into the `custom_lang.php` file that it looks like this:

```
<?php
/**
 * CUSTOM LANGUAGE STRINGS
 *
 * Add .....
 */

$lang = array(

    'language_string_key' => 'Actual content of the Language String',
    
);
```

Now, simply change the translation to whatever you need. But keep in mind that some strings are designed to fit into special spaces. Try to keep the character count or the original string.

> **Danger:**
> If you want to use the `'` character in your string you have to replace it with `\'`.
> Example: `'language_string_key' => 'Description with \'quotes\'',`
