<?php

namespace App;

class Article
{
    // php8 syntax
    public string $title = '';

    public function getSlug()
    {
        $slug = $this->title;

        $slug = preg_replace('/\s+/', '_', $slug);

        $slug = trim($slug, "_");

        return $slug;
    }
}
