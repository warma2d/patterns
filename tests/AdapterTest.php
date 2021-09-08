<?php declare(strict_types=1);

use Patterns\StructuralPatterns\Adapter\DecToBinAdapter;
use Patterns\StructuralPatterns\Adapter\RemoteBinaryCalculator;
use PHPUnit\Framework\TestCase;

final class AdapterTest extends TestCase
{
    public function testAdapter(): void
    {
        $numberOne = 3;
        $numberTwo = 4;

        $remoteBinaryCalculator = new RemoteBinaryCalculator();
        $adapter = new DecToBinAdapter($remoteBinaryCalculator);

        $this->assertEquals(
            ($numberOne + $numberTwo),
            $adapter->sumDecNumbers($numberOne, $numberTwo)
        );
    }
}
