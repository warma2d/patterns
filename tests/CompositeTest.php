<?php declare(strict_types=1);

use Patterns\Decorator\Beverages\DarkRoast;
use Patterns\Decorator\Beverages\HouseBlend;
use Patterns\Decorator\Condiments\Milk;
use Patterns\Decorator\Condiments\Soy;
use Patterns\StructuralPatterns\Composite\Box;
use Patterns\StructuralPatterns\Composite\Item;
use PHPUnit\Framework\TestCase;

final class CompositeTest extends TestCase
{
    public function testBox(): void
    {
        $item1 = new Item(10);
        $item2 = new Item(7);
        $item3 = new Item(2);
        $item4 = new Item(3);

        $smallBox = new Box();
        $smallBox->addComponent($item1);
        $smallBox->addComponent($item2);

        $bigBox = new Box();
        $bigBox->addComponent($smallBox);
        $bigBox->addComponent($item3);
        $bigBox->addComponent($item4);

        $this->assertEquals(
            (10 + 7 + 2 + 3),
            $bigBox->getWeight()
        );
    }
}
