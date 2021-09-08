<?php

namespace Patterns\StructuralPatterns\Bridge\Device;

class Tv implements Device {

    private bool $isEnabled = false;

    function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    function enable()
    {
        $this->isEnabled = true;
    }

    function disable()
    {
        $this->isEnabled = false;
    }
}
