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

    /**
     * small php aspect reminder
     */
    public function testSlugIsEmptyWithNoTitle()
    {
        // 1. null and empty string are equal..
        // 2. function foo() {}
        //    returns null..
        //    the same as: function foo() {return null;}
        // php: compare null an empty string reteturns true
        
        // so, instead of:
        // $this->assertEquals($article->getSlug(), "");
        // use:
        $this->assertSame($this->article->getSlug(), "");
    }

    /**
     * https://phpunit.readthedocs.io/en/9.3/writing-tests-for-phpunit.html#data-providers
     */
    public function titleProvider()
    {
        return [
            'slug spaces replaced by underscore' =>
                    ["An example title", "An_example_title"],
            'slug spaces should not have underscore at start and end position' =>
                    [" An example title ", "An_example_title"],
            'slug whitespaces replaced by underscore' =>
                    ["An      example \n title", "An_example_title"],
            'slug does not have non word characters' =>
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
