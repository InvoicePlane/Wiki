<?php

namespace App\Markdown;

use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\GithubFlavoredMarkdown\GithubFlavoredMarkdownExtension;
use League\CommonMark\MarkdownConverter;

class GithubFlavoredMarkdownConverter
{
    public function convert(string $markdown): string
    {
        $environment = new Environment([
            'html_input' => 'allow',
            'allow_unsafe_links' => false,
        ]);

        $environment->addExtension(new CommonMarkCoreExtension());
        $environment->addExtension(new GithubFlavoredMarkdownExtension());

        return (string) (new MarkdownConverter($environment))->convert($markdown);
    }
}
