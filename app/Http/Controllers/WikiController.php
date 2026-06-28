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

        // Normalize version to underscore format (1.6 → 1_6).
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

        if ($this->usesMarkdown($version)) {
            return $this->serveMarkdown($locale, $version, $dir, $page, $current_url, $versions, $default_version);
        }

        return $this->serveBlade($locale, $version, $dir, $page, $current_url, $versions, $default_version);
    }

    /**
     * Serve a page from a Markdown file.
     * Used for versions >= 1.7.
     * Falls back only within the markdown version pool.
     */
    protected function serveMarkdown($locale, $version, $dir, $page, $current_url, $versions, $default_version)
    {
        $markdown_versions = array_values(array_filter($versions, function ($v) {
            return $this->usesMarkdown($v);
        }));

        // Try requested version first, then older markdown versions newest-first.
        $try_order = array_merge(
            [$version],
            array_values(array_diff(array_reverse($markdown_versions), [$version]))
        );

        foreach ($try_order as $try_version) {
            if (! $this->wikiPage->exists($locale, $try_version, $dir, $page)) {
                continue;
            }

            // Found in an older version — redirect rather than serve cross-version.
            if ($try_version !== $version) {
                return redirect()->to(
                    '/' . $locale . '/' . str_replace('_', '.', $try_version) . $current_url
                );
            }

            $sidebar_view = $locale . '.' . $version . '.sidebar';

            return view('wiki.page', [
                'content'         => $this->wikiPage->get($locale, $version, $dir, $page),
                'page_title'      => $this->wikiPage->title($locale, $version, $dir, $page),
                'sidebar_content' => view()->exists($sidebar_view) ? view($sidebar_view) : null,
            ]);
        }

        return redirect()->to('/' . $locale . '/' . str_replace('_', '.', $default_version));
    }

    /**
     * Serve a page from a Blade template.
     * Used for versions <= 1.6.
     * Falls back only within the blade version pool.
     */
    protected function serveBlade($locale, $version, $dir, $page, $current_url, $versions, $default_version)
    {
        // Build the dot-notation view name from URL segments.
        if (empty($dir) && empty($page)) {
            $requested_view = '.root';
        } elseif (empty($page)) {
            $requested_view = '.' . str_replace('-', '_', $dir);
        } else {
            $requested_view = '.' . str_replace('-', '_', $dir) . '.' . str_replace('-', '_', $page);
        }

        $requested_page = $locale . '.' . $version . $requested_view;

        if (! view()->exists($requested_page)) {
            // Fall back through older blade-only versions (newest first).
            $blade_versions = array_values(array_filter($versions, function ($v) {
                return ! $this->usesMarkdown($v);
            }));

            foreach (array_reverse($blade_versions) as $old_version) {
                $candidate = $locale . '.' . $old_version . $requested_view;

                if (view()->exists($candidate)) {
                    return redirect()->to(
                        '/' . $locale . '/' . str_replace('_', '.', $old_version) . $current_url
                    );
                }
            }

            return redirect()->to('/' . $locale . '/' . str_replace('_', '.', $default_version));
        }

        $sidebar_view = $locale . '.' . $version . '.sidebar';

        return view($requested_page)->with([
            'sidebar_content' => view($sidebar_view),
        ]);
    }

    /**
     * Versions >= 1.7 are served from Markdown files in docs/.
     * Versions <= 1.6 are served from Blade templates in wiki/.
     */
    protected function usesMarkdown(string $version): bool
    {
        return version_compare(str_replace('_', '.', $version), '1.7', '>=');
    }

    public function getTestPage()
    {
        return 'TEST';
    }
}
