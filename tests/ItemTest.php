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
        $item = new Item();

        $reflection = new ReflectionClass(Item::class);

        $method = $reflection->getMethod('getToken');
        $method->setAccessible(true);

        $result = $method->invoke($item);

        $this->assertIsString($result);
    }

    /**
     * it is not good idea to test private methodsm
     * becose is internal class implementation
     * however..
     */
    public function testPrivatePrefixedTokenStartsWithPrefix()
    {
        $item = new Item();

        $reflection = new ReflectionClass(Item::class);

        $method = $reflection->getMethod('getPrefixedToken');
        $method->setAccessible(true);

        $result = $method->invokeArgs($item, ['example']);

        $this->assertStringStartsWith('example', $result);
    }

    public function testItemdIsInteger()
    {
        $item = new Item();
        
        // error: cant access to protected property
        // $this->assertIsInt($item->itemId);
        // so..

        $reflection = new ReflectionClass(Item::class);
        $property = $reflection->getProperty('itemId');
        $property->setAccessible(true);
        $value = $property->getValue($item);

        $this->assertIsInt($value);
    }
}
