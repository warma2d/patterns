<?php declare(strict_types=1);

use Patterns\StructuralPatterns\Flyweight\Forest;
use Patterns\StructuralPatterns\Flyweight\Tree;
use Patterns\StructuralPatterns\Flyweight\TreeType;
use PHPUnit\Framework\TestCase;

final class FlyweightTest extends TestCase
{
    public function testOneTree(): void
    {
        $type = new TreeType('bereza', 'white', 'texture1');
        $tree = new Tree(10, 100, $type);

        $this->assertEquals(
            "I am a tree with coordinates x = 10 and y = 100 \r\n",
            $tree->draw()
        );
    }

    public function testForest(): void
    {
        $forest = new Forest();

        for($x=0; $x<=2; $x++) {
            $forest->plantTree($x, 100, 'bereza', 'white', 'texture1');
        }

        $this->assertEquals(
            "I am a tree with coordinates x = 0 and y = 100 \r\n"
            . "I am a tree with coordinates x = 1 and y = 100 \r\n"
            . "I am a tree with coordinates x = 2 and y = 100 \r\n",
            $forest->draw()
        );
    }
}
