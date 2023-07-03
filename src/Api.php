<?php

declare(strict_types=1);

namespace Libraries\starwarslib;

require_once __DIR__ . '/../vendor/autoload.php';

class Api
{
    public function getName(): string
    {
        $url = 'https://www.starwars.com/databank';
        libxml_use_internal_errors(true); // Ignore HTML5 validation errors

        $dom = new \DOMDocument;
        $dom->loadHTMLFile($url);

        $xpath = new \DOMXPath($dom);
        $titles = $xpath->query('//h3[contains(@class, "title")]');

        if ($titles !== false && $titles->length > 0) {
            $name = '';
            foreach ($titles as $title) {
                $name .= $title->textContent . ' ';
            }
            $name = preg_replace('/\s+/', ' ', $name); // Remove extra whitespace
            return (string) $name;
        } else {
            return ''; // Return blank string if no titles found
        }
    }
}
