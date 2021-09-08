<?php

namespace Patterns\GenerativePatterns\Builder\Car;

class Engine {
    private int $horsepower;

    public function __construct($horsepower) {
        $this->horsepower = $horsepower;
    }

    public function getHorsepower(): int
    {
        return $this->horsepower;
    }
}
