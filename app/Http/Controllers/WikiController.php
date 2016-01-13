<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Config;

class WikiController extends Controller
{
    public function getPage($locale, $version = '', $dir = '', $page = '')
    {
        // Get default vars first
        $default_locale = Config::get('app.locale');
        $default_version = Config::get('app.version');

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
            $requested_page = $locale . '.' . $version . '.root';
        } elseif (empty($page)) {
            $requested_page = $locale . '.' . $version . '.' . str_replace('-', '_', $dir);
        } else {
            $requested_page = $locale . '.' . $version . '.' . str_replace('-', '_', $dir) . '.' . str_replace('-', '_',
                    $page);
        }

        if (view()->exists($requested_page)) {
            return view($requested_page);
        }

        return redirect()->to('/' . $locale . '/' . str_replace('_', '.', $default_version));
    }
}
