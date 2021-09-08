<?php

namespace Patterns\BehavioralPatterns\Strategy\FlyBehavior;

class FlyRocketPowered implements FlyBehavior
{

    public function fly(): string
    {
        return 'I am flying with a rocket!';
    }
}
