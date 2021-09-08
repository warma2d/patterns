<?php

namespace Patterns\BehavioralPatterns\Strategy\Ducks;

use Patterns\BehavioralPatterns\Strategy\FlyBehavior\FlyBehavior;
use Patterns\BehavioralPatterns\Strategy\QuackBehavior\QuackBehavior;

abstract class Duck
{
    private FlyBehavior $flyBehavior;
    private QuackBehavior $quackBehavior;

    public abstract function display();

    public function performFly(): string
    {
        return $this->flyBehavior->fly();
    }

    public function performQuack(): string
    {
        return $this->quackBehavior->quack();
    }

    public function swim(): string
    {
        return 'All ducks float, even decoys!';
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }
}
