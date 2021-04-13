<?php declare(strict_types=1);

namespace App;

/**
 * An example item class
 */
class Item
{
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
}
