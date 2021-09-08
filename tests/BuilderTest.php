<?php declare(strict_types=1);

use Patterns\GenerativePatterns\Builder\Builder\CarBuilder;
use Patterns\GenerativePatterns\Builder\Car\Car;
use Patterns\GenerativePatterns\Builder\Car\Engine;
use Patterns\GenerativePatterns\Builder\Director\Director;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase
{
    public function testSportCar(): void
    {
        $sportCar = new Car();
        $sportCar->setEngine(new Engine(400));
        $sportCar->setNumberDoors(2);
        $sportCar->setNumberSeats(2);
        $sportCar->setIsAndroidHeadUnit(true);

        $director = new Director();
        $builderSportCar = $director->makeSportCar(new CarBuilder());

        $this->assertEquals(
            $sportCar,
            $builderSportCar
        );
    }
}
