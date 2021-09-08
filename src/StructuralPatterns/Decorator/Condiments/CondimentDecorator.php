<?php

namespace Patterns\StructuralPatterns\Decorator\Condiments;

use Patterns\StructuralPatterns\Decorator\Beverages\Beverage;

abstract class CondimentDecorator extends Beverage
{

    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}
