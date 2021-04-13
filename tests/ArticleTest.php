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

    /*
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

    public function testSlugDoesNotStartOrEndWithUnderscore()
    {
        $this->article->title = " read ≠ this! now %$# :-) ";

        $this->assertEquals($this->article->getSlug(), "read_this_now");
    }
    */

    /**
     * https://phpunit.readthedocs.io/en/9.3/writing-tests-for-phpunit.html#data-providers
     */
    public function titleProvider()
    {
        return [
            ["An example title", "An_example_title"],
            [" An example title ", "An_example_title"],
            ["An      example \n title", "An_example_title"],
            [" read ≠ this! now %$# \r :-) ", "read_this_now"],
        ];
    }

    /**
     * @dataProvider titleProvider
     */
    public function testSug($title, $slug)
    {
        $this->article->title = $title;

        $this->assertEquals($this->article->getSlug(), $slug);
    }
}
