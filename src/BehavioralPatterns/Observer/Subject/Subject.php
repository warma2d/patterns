<?php

namespace Patterns\BehavioralPatterns\Observer\Subject;

use Patterns\BehavioralPatterns\Observer\Observers\Observer;

interface Subject
{
    function registerObserver(Observer $observer);

    function removeObserver(Observer $observer);
}
