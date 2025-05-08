<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;

class WikiController extends Controller
{
    public function getPage($locale, $version = '', $dir = '', $page = '')
    {
        // Get default vars first
        $default_locale = Config::get('app.locale');
        $default_version = Config::get('app.version');

        // Check if the requested page has a redirect
        $redirects = Config::get('routes.redirects');

        if (isset($redirects[$version][$dir][$page])) {
            return redirect()->to($redirects[$version][$dir][$page]);
        }

        // Redirect to the default locale if the requested one is not available
        $locales = Config::get('app.available_locales');
        if (!isset($locales[$locale])) {
            $redirect_url = $default_locale;
            if ($version) {
                $redirect_url .= '/' . $version;
            }
            if ($dir) {
                $redirect_url .= '/' . $dir;
            }
            if ($page) {
                $redirect_url .= '/' . $page;
            }
            return redirect()->to($redirect_url);
        }

        // Redirect to the default version if the requested one is not available
        $versions = Config::get('app.versions');
        $version = str_replace('.', '_', $version);
        if (empty($version) || !in_array($version, $versions)) {
            $redirect_url = $locale . '/' . str_replace('_', '.', $default_version);
            if (!empty($dir)) {
                $redirect_url .= '/' . $dir;
            }
            if (!empty($page)) {
                $redirect_url .= '/' . $page;
            }
            return redirect()->to($redirect_url);
        }

        // Check if the requested page exists, if not redirect to home
        if (empty($dir) && empty($page)) {
            $requested_view = '.root';
            $current_url = '/';
        } elseif (empty($page)) {
            $requested_view = '.' . str_replace('-', '_', $dir);
            $current_url = '/' . $dir;
        } else {
            $requested_view = '.' . str_replace('-', '_', $dir) . '.' . str_replace('-', '_', $page);
            $current_url = '/' . $dir . '/' . $page;
        }

        $requested_page = $locale . '.' . $version . $requested_view;

        // Check if the view exists
        if (!view()->exists($requested_page)) {

            // Check if the page exists for an older version
            $reverse_versions = array_reverse($versions);

            foreach($reverse_versions as $old_version) {
                $requested_page = $locale . '.' . $old_version . $requested_view;

                if (view()->exists($requested_page)) {
                    // View found, redirect to the page
                    return redirect()->to('/' . $locale . '/' . str_replace('_', '.', $old_version) . $current_url);
                }

                $requested_page = '';
                continue;
            }

        }

        // Load the page if found
        if ($requested_page !== '' && $requested_page !== '0') {
            $sidebar_content_view = $locale . '.' . $version . '.sidebar';

            view()->share([
                'current_dir' => $dir,
                'current_page' => $page,
                'current_url' => $current_url,
                'current_version' => str_replace('_', '.', $version),
            ]);

            return view($requested_page)->with([
                'sidebar_content' => view($sidebar_content_view),
            ]);
        }

        // Load the default page
        return redirect()->to('/' . $locale . '/' . str_replace('_', '.', $default_version));
    }

    public function getTestPage()
    {
        return "TEST";
    }
}
