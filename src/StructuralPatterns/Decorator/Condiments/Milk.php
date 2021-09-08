<?php

namespace Patterns\StructuralPatterns\Decorator\Condiments;

class Milk extends CondimentDecorator
{

    public function cost(): float
    {
        return $this->beverage->cost() + 1.5;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Milk';
    }
}
