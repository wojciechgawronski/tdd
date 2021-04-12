<?php

use PHPUnit\Framework\TestCase;

class ArticlaTest extends TestCase
{
    public function testTitleIsEmptyByDefault()
    {
        $article = new App\Article;

        $this->assertEmpty($article->title);
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $article = new App\Article;
         
        // 1. null and empty string are equal..
        // 2. function foo() {}
        //    returns null..
        //    the same as: function foo() {return null;}
        // php: compare null an empty string reteturn true
        
        // so, instead of:
        // $this->assertEquals($article->getSlug(), "");
        // use:
        $this->assertSame($article->getSlug(), "");
    }
}
