<?php

namespace Patterns\GenerativePatterns\FactoryMethod\CoffeeShop;

use Patterns\GenerativePatterns\FactoryMethod\Coffee\Coffee;

abstract class CoffeeShop
{
    public const ESPRESSO = 'ESPRESSO';
    public const CAPPUCCINO = 'CAPPUCCINO';

    protected abstract function createCoffee(string $type): Coffee;
}
