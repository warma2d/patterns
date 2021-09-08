<?php

namespace Patterns\StructuralPatterns\Decorator\Beverages;

class DarkRoast extends Beverage
{

    public function getDescription(): string
    {
        return 'DarkRoast';
    }

    public function cost(): float
    {
        return 5;
    }
}
