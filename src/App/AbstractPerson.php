<?php

namespace App;

abstract class AbstractPerson
{

    public function __construct(
        protected string $name)
    {
        
    }

    abstract protected function getTitle() : string;

    public function getNameAndTitle() :string
    {
        return $this->getTitle() . ' ' . $this->name;
    }
}