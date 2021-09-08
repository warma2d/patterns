<?php

namespace Patterns\GenerativePatterns\Builder\Builder;

use Patterns\GenerativePatterns\Builder\Car\Engine;

interface Builder {
    function reset();
    function setEngine(Engine $engine);
    function setNumberSeats(int $numberSeats);
    function setNumberDoors(int $numberDoors);
    function setIsAndroidHeadUnit(bool $isAndroidHeadUnit);
    function getResult();
}
