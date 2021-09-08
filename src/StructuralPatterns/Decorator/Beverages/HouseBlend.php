<?php

namespace Patterns\StructuralPatterns\Decorator\Beverages;

class HouseBlend extends Beverage
{

    public function getDescription()
    {
    }

    public function cost(): float
    {
        return 7;
    }
}
