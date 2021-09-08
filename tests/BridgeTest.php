<?php declare(strict_types=1);

use Patterns\StructuralPatterns\Bridge\Device\Tv;
use Patterns\StructuralPatterns\Bridge\Remote\Remote;
use PHPUnit\Framework\TestCase;

final class BridgeTest extends TestCase
{
    public function testDisableTv(): void
    {
        $tv = new Tv();

        $this->assertEquals(
            false,
            $tv->isEnabled()
        );
    }

    public function testToggleTv(): void
    {
        $tv = new Tv();
        $remote = new Remote($tv);
        $remote->togglePower();

        $this->assertEquals(
            true,
            $tv->isEnabled()
        );
    }
}
