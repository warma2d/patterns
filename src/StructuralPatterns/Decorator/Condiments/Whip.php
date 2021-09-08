<?php

namespace Patterns\StructuralPatterns\Decorator\Condiments;

class Whip extends CondimentDecorator
{

    public function cost(): float
    {
        return $this->beverage->cost() + 2;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Whip';
    }
}
