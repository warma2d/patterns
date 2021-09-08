<?php declare(strict_types=1);

use Patterns\StructuralPatterns\Decorator\Beverages\DarkRoast;
use Patterns\StructuralPatterns\Decorator\Beverages\HouseBlend;
use Patterns\StructuralPatterns\Decorator\Condiments\Milk;
use Patterns\StructuralPatterns\Decorator\Condiments\Soy;
use PHPUnit\Framework\TestCase;

final class DecoratorTest extends TestCase
{
    public function testDarkRoastWithMilk(): void
    {
        $darkRoast = new DarkRoast();
        $milk = new Milk($darkRoast);

        $this->assertEquals(
            (5+1.5),
            $milk->cost()
        );
    }

    public function testHouseBlendAndDoubleSoyAndMilk(): void
    {
        $beverage = new HouseBlend();
        $beverage = new Soy($beverage);
        $beverage = new Soy($beverage);
        $beverage = new Milk($beverage);

        $this->assertEquals(
            (7 + 3 + 3 + 1.5),
            $beverage->cost()
        );
    }
}
