<?php declare(strict_types=1);

namespace App;

/**
 * An example item class
 */
class Item
{
    protected int $itemId;

    public function __construct()
    {
        $this->itemId = rand();
    }

    public function getDescription() : string
    {
        return $this->getId() . "_" . $this->getToken();
    }

    protected function getId() : int
    {
        return rand();
    }

    private function getToken() : string
    {
        return uniqid();
    }

    private function getPrefixedToken(string $prefix) : string
    {
        return uniqid($prefix);
    }
}
