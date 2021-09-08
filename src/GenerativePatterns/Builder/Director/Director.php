<?php

namespace Patterns\GenerativePatterns\Builder\Director;

use Patterns\GenerativePatterns\Builder\Builder\Builder;
use Patterns\GenerativePatterns\Builder\Car\Car;
use Patterns\GenerativePatterns\Builder\Car\Engine;

class Director {
    public function makeSportCar(Builder $builder): Car
    {
        $builder->reset();
        $builder->setIsAndroidHeadUnit(true);
        $builder->setNumberSeats(2);
        $builder->setNumberDoors(2);
        $builder->setEngine(new Engine(400));

        return $builder->getResult();
    }
}
