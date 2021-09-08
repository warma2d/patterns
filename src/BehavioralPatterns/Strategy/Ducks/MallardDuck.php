<?php

namespace Patterns\BehavioralPatterns\Strategy\Ducks;

use Patterns\BehavioralPatterns\Strategy\FlyBehavior\FlyWithWings;
use Patterns\BehavioralPatterns\Strategy\QuackBehavior\Quack;

class MallardDuck extends Duck
{

    public function __construct()
    {
        $this->setFlyBehavior(new FlyWithWings());
        $this->setQuackBehavior(new Quack());
    }

    public function display(): string
    {
        return 'I am real mallard duck';
    }
}
