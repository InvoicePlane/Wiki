# Update InvoicePlane

## Contents

- [Upgrade information](#upgrade-information)
- [**Upgrade instructions (v1.6.x to v1.7.0)**](#16x-170-instructions)
  1. Preliminary operations
  2. Replace files & test

---

## Upgrade information

Upgrade instructions for v1.7 will be published here once the release is available. Check the [changelog](/en/1.7/general/changelog) and [GitHub releases](https://github.com/InvoicePlane/InvoicePlane/releases) for the latest information.

## Instructions to upgrade to 1.7.0 from 1.6.x

#### 1. Preliminary operations

1. Make a backup of your database and all files. (This is **very important** to prevent any data loss)
2. Download the latest version from [InvoicePlane.com](https://invoiceplane.com/downloads).

#### 2. Replace files & test

1. Copy all files to the root directory of your InvoicePlane installation but **do not** overwrite the
   following files:
   - The `ipconfig.php` file
   - Customized templates in the `application/views/` folder
   - The files for custom styles: `assets/core/css/custom.css` and `assets/core/css/custom-pdf.css`
   - Uploaded images in the `uploads/` folder (e. g. your company logo)
   - Custom language keys at `application/language/COUNTRY/custom_lang.php`
   > **Note:**
   >
   > **Hint:** An *easy* way of performing this operation is to upload the whole new InvoicePlane version in a different folder, outside of your current installation root folder, and copy the above mentioned files in the new folder you just uploaded. Afterwards just rename your current folder to something like `my_current_folder_old` and rename your new-version-folder with the name of `my_current_folder`.
2. Open `http://yourdomain.com/index.php/setup` and follow the instructions. The app will run all
   updates on its own.
   - If you encounter any errors when upgrading the table, press "Try Again" to resolve those errors and continue with the setup.
3. Now that the update is installed, moved and protected, it's time to log in and see if everything is working: login again and check if everything is working.
