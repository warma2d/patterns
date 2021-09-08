<?php declare(strict_types=1);

use Patterns\GenerativePatterns\Prototype\Archer;
use PHPUnit\Framework\TestCase;

final class PrototypeTest extends TestCase
{
    public function testCloneArcher(): void
    {
        $archer = new Archer();
        $archer->setHeight(180);
        $archer->setWeight(90);
        $archer->setSkill(100);

        $clonedArcher = clone $archer;

        $this->assertEquals(
            $archer,
            $clonedArcher
        );
    }
}
