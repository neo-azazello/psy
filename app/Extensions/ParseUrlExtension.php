<?php

namespace App\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ParseUrlExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('parse_url', [$this, 'parseUrl']),
        ];
    }

    public function parseUrl(string $url)
    {
        $parse = parse_url($url, PHP_URL_HOST);
        $www_remove = str_ireplace('www.', '', $parse);
        $domain_remove = preg_replace('/(.com|.ru)/', '', $www_remove);

        return $domain_remove;
    }
}
