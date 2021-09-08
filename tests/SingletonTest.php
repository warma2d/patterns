<?php declare(strict_types=1);

use Patterns\GenerativePatterns\Singleton\Database;
use PHPUnit\Framework\TestCase;

final class SingletonTest extends TestCase
{
    public function testSingleton(): void
    {
        $firstObject = Database::getInstance();
        $secondObject = Database::getInstance();

        $this->assertEquals(
            $firstObject,
            $secondObject
        );
    }
}
