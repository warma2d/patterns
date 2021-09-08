<?php

namespace Patterns\BehavioralPatterns\Strategy\QuackBehavior;

class Quack implements QuackBehavior
{

    public function quack(): string
    {
        return 'Quack';
    }
}
