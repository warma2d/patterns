<?php

namespace Patterns\BehavioralPatterns\Strategy\QuackBehavior;

class MuteQuack implements QuackBehavior
{

    public function quack(): string
    {
        return '<< Silence >>';
    }
}
