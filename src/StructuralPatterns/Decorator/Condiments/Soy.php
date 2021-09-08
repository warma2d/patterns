<?php

namespace Patterns\StructuralPatterns\Decorator\Condiments;

class Soy extends CondimentDecorator
{

    public function cost(): float
    {
        return $this->beverage->cost() + 3;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Soy';
    }
}
