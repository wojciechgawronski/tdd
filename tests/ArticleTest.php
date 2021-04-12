<?php

use PHPUnit\Framework\TestCase;

class ArticlaTest extends TestCase
{
    public function testTitleIsEmptyByDefault()
    {
        $article = new App\Article;

        $this->assertEmpty($article->title);
    }

}