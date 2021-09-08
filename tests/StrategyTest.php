<?php declare(strict_types=1);

use Patterns\BehavioralPatterns\Strategy\Ducks\MallardDuck;
use Patterns\BehavioralPatterns\Strategy\FlyBehavior\FlyRocketPowered;
use Patterns\BehavioralPatterns\Strategy\QuackBehavior\Squeak;
use PHPUnit\Framework\TestCase;

final class StrategyTest extends TestCase
{
    public function testSwimMallardDuck(): void
    {
        $duck = new MallardDuck();

        $this->assertEquals(
            'All ducks float, even decoys!',
            $duck->swim()
        );
    }

    public function testFlyWithWingsMallardDuck(): void
    {
        $duck = new MallardDuck();

        $this->assertEquals(
            'I am flying!',
            $duck->performFly()
        );
    }

    public function testFlyWithRocketMallardDuck(): void
    {
        $duck = new MallardDuck();
        $duck->setFlyBehavior(new FlyRocketPowered());

        $this->assertEquals(
            'I am flying with a rocket!',
            $duck->performFly()
        );
    }

    public function testQuackMallardDuck(): void
    {
        $duck = new MallardDuck();

        $this->assertEquals(
            'Quack',
            $duck->performQuack()
        );
    }

    public function testSqueakMallardDuck(): void
    {
        $duck = new MallardDuck();
        $duck->setQuackBehavior(new Squeak());

        $this->assertEquals(
            'Squeak',
            $duck->performQuack()
        );
    }
}
