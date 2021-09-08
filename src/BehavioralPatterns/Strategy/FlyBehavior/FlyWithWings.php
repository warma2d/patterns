<?php

namespace Patterns\BehavioralPatterns\Strategy\FlyBehavior;

class FlyWithWings implements FlyBehavior
{

    public function fly(): string
    {
        return 'I am flying!';
    }
}
