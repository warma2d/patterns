<?php

namespace Patterns\GenerativePatterns\Builder\Car;

class Car {
    private Engine $engine;
    private int $numberSeats;
    private int $numberDoors;
    private bool $isAndroidHeadUnit;

    /**
     * @return Engine
     */
    public function getEngine(): Engine
    {
        return $this->engine;
    }

    /**
     * @param  Engine  $engine
     */
    public function setEngine(Engine $engine): void
    {
        $this->engine = $engine;
    }

    /**
     * @return int
     */
    public function getNumberSeats(): int
    {
        return $this->numberSeats;
    }

    /**
     * @param  int  $numberSeats
     */
    public function setNumberSeats(int $numberSeats): void
    {
        $this->numberSeats = $numberSeats;
    }

    /**
     * @return int
     */
    public function getNumberDoors(): int
    {
        return $this->numberDoors;
    }

    /**
     * @param  int  $numberDoors
     */
    public function setNumberDoors(int $numberDoors): void
    {
        $this->numberDoors = $numberDoors;
    }

    /**
     * @return bool
     */
    public function isAndroidHeadUnit(): bool
    {
        return $this->isAndroidHeadUnit;
    }

    /**
     * @param  bool  $isAndroidHeadUnit
     */
    public function setIsAndroidHeadUnit(bool $isAndroidHeadUnit): void
    {
        $this->isAndroidHeadUnit = $isAndroidHeadUnit;
    }
}
