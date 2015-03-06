<?php

class WikiController extends BaseController {


    public function getPage($locale, $version, $dir = '', $page = '')
    {
        // Get default vars first
        $default_locale = Config::get('app.locale');
        $default_version = Config::get('app.version');

        // Set locale to default locale if not found in available locales
        $locales = Config::get('app.available_locales');
        if (!isset($locales[$locale])) {
            $locale = $default_locale;
            // Save the locale
            App::setLocale($locale);
        }

        // Set version to default version if not found in available versions
        $versions = Config::get('app.versions');
        $version = str_replace('.', '_', $version);
        if (!in_array($version, $versions)) {
            $version = $default_version;
            // Save the version
            Config::set('app.version', $version);
        }

        // Check if the requested page exists, if not redirect to home
        if (empty($dir) && empty($page)) {
            $requested_page = $locale . '.' . $version . '.root';
        } elseif (empty($page)) {
            $requested_page = $locale . '.' . $version . '.' . str_replace('-', '_', $dir);
        } else {
            $requested_page = $locale . '.' . $version . '.' . str_replace('-', '_', $dir) . '.' . str_replace('-', '_', $page);
        }

        //return dd($requested_page);

        if (View::exists($requested_page)) {
            return View::make($requested_page);
        }

        return Redirect::to('/' . $locale . '/' . str_replace('_', '.', $default_version));
    }

}
