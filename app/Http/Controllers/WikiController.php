<?php

namespace App\Http\Controllers;

use App\WikiPage;
use Illuminate\Support\Facades\Config;

class WikiController extends Controller
{
    /**
     * @var WikiPage
     */
    protected $wikiPage;

    public function __construct(WikiPage $wikiPage)
    {
        $this->wikiPage = $wikiPage;
    }

    public function getPage($locale, $version = '', $dir = '', $page = '')
    {
        $default_locale  = Config::get('app.locale');
        $default_version = Config::get('app.version');

        // Check if the requested page has a redirect configured.
        $redirects = Config::get('routes.redirects');
        if (isset($redirects[$version][$dir][$page])) {
            return redirect()->to($redirects[$version][$dir][$page]);
        }

        // Redirect to the default locale if the requested one is not available.
        $locales = Config::get('app.available_locales');
        if (! isset($locales[$locale])) {
            $redirect_url = $default_locale;
            if ($version) { $redirect_url .= '/' . $version; }
            if ($dir)     { $redirect_url .= '/' . $dir; }
            if ($page)    { $redirect_url .= '/' . $page; }
            return redirect()->to($redirect_url);
        }

        // Normalize version to underscore format (1.6 → 1_6) to match app config.
        $versions = Config::get('app.versions');
        $version  = str_replace('.', '_', $version);

        if (empty($version) || ! in_array($version, $versions)) {
            $redirect_url = $locale . '/' . str_replace('_', '.', $default_version);
            if (! empty($dir))  { $redirect_url .= '/' . $dir; }
            if (! empty($page)) { $redirect_url .= '/' . $page; }
            return redirect()->to($redirect_url);
        }

        // Build the sub-path used by the topbar version switcher.
        if (! empty($dir) && ! empty($page)) {
            $current_url = '/' . $dir . '/' . $page;
        } elseif (! empty($dir)) {
            $current_url = '/' . $dir;
        } else {
            $current_url = '/';
        }

        view()->share([
            'current_dir'     => $dir,
            'current_page'    => $page,
            'current_url'     => $current_url,
            'current_version' => str_replace('_', '.', $version),
        ]);

        // Try the requested version first, then fall back through older versions.
        $reverse_versions = array_reverse($versions);
        $versions_to_try  = array_merge([$version], array_diff($reverse_versions, [$version]));

        foreach ($versions_to_try as $try_version) {
            if (! $this->wikiPage->exists($locale, $try_version, $dir, $page)) {
                continue;
            }

            // Found in an older version — redirect rather than serve from there.
            if ($try_version !== $version) {
                return redirect()->to(
                    '/' . $locale . '/' . str_replace('_', '.', $try_version) . $current_url
                );
            }

            $content    = $this->wikiPage->get($locale, $version, $dir, $page);
            $page_title = $this->wikiPage->title($locale, $version, $dir, $page);

            $sidebar_view = $locale . '.' . $version . '.sidebar';

            return view('wiki.page', [
                'content'         => $content,
                'page_title'      => $page_title,
                'sidebar_content' => view()->exists($sidebar_view) ? view($sidebar_view) : null,
            ]);
        }

        // Nothing found anywhere — go to the version root.
        return redirect()->to('/' . $locale . '/' . str_replace('_', '.', $default_version));
    }

    public function getTestPage()
    {
        return 'TEST';
    }
}
