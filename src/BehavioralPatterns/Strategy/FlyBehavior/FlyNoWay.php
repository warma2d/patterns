<?php

namespace Patterns\BehavioralPatterns\Strategy\FlyBehavior;

class FlyNoWay implements FlyBehavior
{

    public function fly(): string
    {
        return 'I can\'t fly';
    }
}
