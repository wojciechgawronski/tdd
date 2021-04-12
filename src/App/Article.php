<?php

namespace App;

class Article
{
    // php8 syntax
    public string $title = '';

    public function getSlug()
    {
        $slug = $this->title;

        $slug = str_replace(' ', '_', $slug);

        return $slug;
    }
}
