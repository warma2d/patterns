<?php

namespace Patterns\BehavioralPatterns\Strategy\QuackBehavior;

class Squeak implements QuackBehavior
{

    public function quack(): string
    {
        return 'Squeak';
    }
}
