<?php

namespace Patterns\GenerativePatterns\FactoryMethod\CoffeeShop;

use Patterns\GenerativePatterns\FactoryMethod\Coffee\Coffee;
use Patterns\GenerativePatterns\FactoryMethod\Coffee\ItalianStyleCappuccino;
use Patterns\GenerativePatterns\FactoryMethod\Coffee\ItalianStyleEspresso;

class ItalianCoffeeShop extends CoffeeShop
{
    public function createCoffee(string $type): Coffee
    {
        return match ($type) {
            CoffeeShop::ESPRESSO => new ItalianStyleEspresso(),
            CoffeeShop::CAPPUCCINO => new ItalianStyleCappuccino(),
            default => null,
        };
    }
}
