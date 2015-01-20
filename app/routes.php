<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {return View::make('sites.home');});

// Sections
Route::get('/getting-started', function() {return View::make('sites.getting_started');});
Route::get('/modules', function() {return View::make('sites.modules');});
Route::get('/settings', function() {return View::make('sites.settings');});
Route::get('/system', function() {return View::make('sites.system');});

// Sites without translation
Route::get('changelog', function() {return View::make('sites.general.changelog');});
Route::get('license', function() {return View::make('sites.general.license');});

// General Links (About)
Route::get('about', function() {return View::make('sites.general.about');});
Route::get('updates', function() {return View::make('sites.general.updates');});

// Getting Started
Route::get('getting-started/requirements', function() {return View::make('sites.getting_started.requirements');});
Route::get('getting-started/installation', function() {return View::make('sites.getting_started.installation');});
Route::get('getting-started/quickstart', function() {return View::make('sites.getting_started.quickstart');});
Route::get('getting-started/move-from-fusioninvoice', function() {return View::make('sites.getting_started.move_from_fi');});

// Main Modules
Route::get('modules/clients', function() {return View::make('sites.modules.clients');});
Route::get('modules/quotes', function() {return View::make('sites.modules.quotes');});
Route::get('modules/invoices', function() {return View::make('sites.modules.invoices');});
Route::get('modules/recurring-invoices', function() {return View::make('sites.modules.recurring_invoices');});
Route::get('modules/payments', function() {return View::make('sites.modules.payments');});

// Settings
Route::get('settings/general', function() {return View::make('sites.settings.general');});
Route::get('settings/quotes', function() {return View::make('sites.settings.quotes');});
Route::get('settings/invoices', function() {return View::make('sites.settings.invoices');});
Route::get('settings/payments', function() {return View::make('sites.settings.payments');});
Route::get('settings/taxrates', function() {return View::make('sites.settings.taxrates');});
Route::get('settings/invoicegroups', function() {return View::make('sites.settings.invoicegroups');});
Route::get('settings/translation-localization', function() {return View::make('sites.settings.translation_localization');});
Route::get('settings/custom-fields', function() {return View::make('sites.settings.custom_fields');});
Route::get('settings/user-accounts', function() {return View::make('sites.settings.user_accounts');});
Route::get('settings/email-templates', function() {return View::make('sites.settings.email_templates');});

// System
Route::get('system/importing-data', function() {return View::make('sites.system.importing_data');});

/*
 * =====================================================
 */

Route::group(array('prefix' => '{locale}'), function() {

    Route::get('/', function() {return View::make('sites.home');});

    // Sections
    Route::get('/getting-started', function() {return View::make('sites.getting_started');});
    Route::get('/modules', function() {return View::make('sites.modules');});
    Route::get('/settings', function() {return View::make('sites.settings');});
    Route::get('/system', function() {return View::make('sites.system');});

    // General (About)
    Route::get('about', function() {return View::make('sites.general.about');});
    Route::get('updates', function() {return View::make('sites.general.updates');});

    // Getting Started
    Route::get('getting-started/requirements', function() {return View::make('sites.getting_started.requirements');});
    Route::get('getting-started/installation', function() {return View::make('sites.getting_started.installation');});
    Route::get('getting-started/quickstart', function() {return View::make('sites.getting_started.quickstart');});
    Route::get('getting-started/move-from-fusioninvoice', function() {return View::make('sites.getting_started.move_from_fusioninvoice');});

    // Main Modules
    Route::get('modules/clients', function() {return View::make('sites.guides.clients');});
    Route::get('modules/quotes', function() {return View::make('sites.guides.quotes');});
    Route::get('modules/invoices', function() {return View::make('sites.guides.invoices');});
    Route::get('modules/recurring-invoices', function() {return View::make('sites.guides.recurring_invoices');});
    Route::get('modules/payments', function() {return View::make('sites.guides.payments');});

    // Settings
    Route::get('settings/general', function() {return View::make('sites.settings.general');});
    Route::get('settings/quotes', function() {return View::make('sites.settings.quotes');});
    Route::get('settings/invoices', function() {return View::make('sites.settings.invoices');});
    Route::get('settings/payments', function() {return View::make('sites.settings.payments');});
    Route::get('settings/taxrates', function() {return View::make('sites.settings.taxrates');});
    Route::get('settings/invoicegroups', function() {return View::make('sites.settings.invoicegroups');});
    Route::get('settings/translation-localization', function() {return View::make('sites.settings.translation_localization');});
    Route::get('settings/custom-fields', function() {return View::make('sites.settings.custom_fields');});
    Route::get('settings/user-accounts', function() {return View::make('sites.settings.user_accounts');});
    Route::get('settings/email-templates', function() {return View::make('sites.settings.email_templates');});

    // System
    Route::get('system/importing-data', function() {return View::make('sites.system.importing_data');});

});
