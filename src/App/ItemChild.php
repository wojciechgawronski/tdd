<?php

namespace App;

class ItemChild extends Item
{
    public function getId() : int
    {
        return parent::getId();
    }
}
