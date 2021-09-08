<?php

namespace Patterns\BehavioralPatterns\Observer\Observers;

interface Observer
{
    function update(float $temperature, float $humidity, float $pressure);
}
