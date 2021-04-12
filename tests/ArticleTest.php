<?php

use PHPUnit\Framework\TestCase;

class ArticlaTest extends TestCase
{

    protected $article;

    public function setUp() : void
    {
        $this->article = new App\Article;
    }

    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->title);
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        // 1. null and empty string are equal..
        // 2. function foo() {}
        //    returns null..
        //    the same as: function foo() {return null;}
        // php: compare null an empty string reteturn true
        
        // so, instead of:
        // $this->assertEquals($article->getSlug(), "");
        // use:
        $this->assertSame($this->article->getSlug(), "");
    }

    /**
     * test any s
     */
    public function testSlugHasSpacesReplacedByUnderscores()
    {
        $this->article->title = "An example title";

        $this->assertEquals($this->article->getSlug(), "An_example_title");
    }

    public function testSlugHashWithWhiteSpaces()
    {
        $this->article->title = "An      example \n title";

        $this->assertEquals($this->article->getSlug(), "An_example_title");
        
    }
}
