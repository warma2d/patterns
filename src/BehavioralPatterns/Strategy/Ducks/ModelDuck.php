<?php

namespace Patterns\BehavioralPatterns\Strategy\Ducks;


use Patterns\BehavioralPatterns\Strategy\FlyBehavior\FlyNoWay;
use Patterns\BehavioralPatterns\Strategy\QuackBehavior\Quack;

class ModelDuck extends Duck
{

    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWay());
        $this->setQuackBehavior(new Quack());
    }

    public function display(): string
    {
        return 'I am model duck';
    }
}
