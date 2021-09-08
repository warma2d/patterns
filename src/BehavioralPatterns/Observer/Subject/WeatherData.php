<?php

namespace Patterns\BehavioralPatterns\Observer\Subject;

use Patterns\BehavioralPatterns\Observer\Observers\Observer;

class WeatherData implements Subject
{

    /** @var $observers Observer[] */
    private array $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        $index = array_search($observer, $this->observers);
        if ($index) {
            unset($this->observers[$index]);
        }
    }

    private function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->notifyObservers();
    }
}
