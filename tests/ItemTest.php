<?php declare(strict_types=1);

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item();

        $this->assertNotEmpty($item->getDescription());
    }

    public function testIdIsInteger()
    {
        $item = new Item();

        $this->assertIsInt($item->getId());
    }
}
