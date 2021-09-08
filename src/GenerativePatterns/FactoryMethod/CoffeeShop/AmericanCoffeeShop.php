<?php

namespace Patterns\GenerativePatterns\FactoryMethod\CoffeeShop;

use Patterns\GenerativePatterns\FactoryMethod\Coffee\AmericanStyleCappuccino;
use Patterns\GenerativePatterns\FactoryMethod\Coffee\AmericanStyleEspresso;
use Patterns\GenerativePatterns\FactoryMethod\Coffee\Coffee;

class AmericanCoffeeShop extends CoffeeShop
{
    public function createCoffee(string $type): Coffee
    {
        return match ($type) {
            CoffeeShop::ESPRESSO => new AmericanStyleEspresso(),
            CoffeeShop::CAPPUCCINO => new AmericanStyleCappuccino(),
            default => null,
        };
    }
}
