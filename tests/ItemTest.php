<?php declare(strict_types=1);

use App\Item;
use App\ItemChild;
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
        $item = new ItemChild();

        $this->assertIsInt($item->getId());
    }

    public function testTokenIsAString()
    {
        $item = new ItemChild();

        $reflection = new ReflectionClass(Item::class);

        $method = $reflection->getMethod('getToken');
        $method->setAccessible(true);

        $result = $method->invoke($item);

        $this->assertIsString($result);
    }
}
