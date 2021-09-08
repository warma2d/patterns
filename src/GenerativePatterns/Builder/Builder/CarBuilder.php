<?php

namespace Patterns\GenerativePatterns\Builder\Builder;

use Patterns\GenerativePatterns\Builder\Car\Car;
use Patterns\GenerativePatterns\Builder\Car\Engine;

class CarBuilder implements Builder {

    private Car $car;

    function reset()
    {
        $this->car = new Car();
    }

    function setEngine(Engine $engine)
    {
        $this->car->setEngine($engine);
    }

    function setNumberSeats(int $numberSeats)
    {
        $this->car->setNumberSeats($numberSeats);
    }

    function setNumberDoors(int $numberDoors)
    {
        $this->car->setNumberDoors($numberDoors);
    }

    function setIsAndroidHeadUnit(bool $isAndroidHeadUnit)
    {
        $this->car->setIsAndroidHeadUnit($isAndroidHeadUnit);
    }

    function getResult(): Car
    {
        return $this->car;
    }
}
