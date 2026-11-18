<?php

namespace App;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Cache\Repository as Cache;
use App\Markdown\GithubFlavoredMarkdownConverter;

class WikiPage
{
    /**
     * @var Filesystem
     */
    protected $files;

    /**
     * @var Cache
     */
    protected $cache;

    public function __construct(Filesystem $files, Cache $cache)
    {
        $this->files = $files;
        $this->cache = $cache;
    }

    /**
     * Return the rendered HTML for a wiki page, or null if the markdown file
     * does not exist.
     *
     * @param  string  $locale   e.g. 'en'
     * @param  string  $version  internal underscore format, e.g. '1_6'
     * @param  string  $dir      e.g. 'getting-started'
     * @param  string  $page     e.g. 'requirements'
     * @return string|null
     */
    public function get(string $locale, string $version, string $dir = '', string $page = ''): ?string
    {
        $key = 'wiki.' . implode('.', array_filter([$locale, $version, $dir, $page]));

        return $this->cache->remember($key, 5, function () use ($locale, $version, $dir, $page) {
            $path = $this->resolvePath($locale, $version, $dir, $page);

            if (! $this->files->exists($path)) {
                return null;
            }

            return (new GithubFlavoredMarkdownConverter())->convert(
                $this->files->get($path)
            );
        });
    }

    /**
     * Return whether a markdown file exists for the given page.
     */
    public function exists(string $locale, string $version, string $dir = '', string $page = ''): bool
    {
        return $this->files->exists($this->resolvePath($locale, $version, $dir, $page));
    }

    /**
     * Extract the page title from the first # heading in the markdown source.
     */
    public function title(string $locale, string $version, string $dir = '', string $page = ''): string
    {
        $key = 'wiki.' . implode('.', array_filter([$locale, $version, $dir, $page])) . '.title';

        return $this->cache->remember($key, 5, function () use ($locale, $version, $dir, $page) {
            $path = $this->resolvePath($locale, $version, $dir, $page);

            if (! $this->files->exists($path)) {
                return '';
            }

            preg_match('/^# (.+)$/m', $this->files->get($path), $matches);

            return $matches[1] ?? '';
        });
    }

    /**
     * Build the filesystem path for a markdown file.
     *
     * Internal underscore version (1_6) is converted to dot format (1.6) to
     * match the docs/ directory structure.
     *
     * Examples:
     *   en, 1_6, '', ''              → docs/en/1.6/index.md
     *   en, 1_6, 'getting-started', '' → docs/en/1.6/getting-started/index.md
     *   en, 1_6, 'getting-started', 'requirements' → docs/en/1.6/getting-started/requirements.md
     */
    protected function resolvePath(string $locale, string $version, string $dir, string $page): string
    {
        $versionDir = str_replace('_', '.', $version);
        $base = base_path("docs/{$locale}/{$versionDir}");

        if (empty($dir) && empty($page)) {
            return "{$base}/index.md";
        }

        if (empty($page)) {
            return "{$base}/{$dir}/index.md";
        }

        return "{$base}/{$dir}/{$page}.md";
    }
}
