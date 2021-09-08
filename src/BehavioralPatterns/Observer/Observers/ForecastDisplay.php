<?php

namespace Patterns\BehavioralPatterns\Observer\Observers;

use Patterns\BehavioralPatterns\Observer\Display\DisplayElement;

class ForecastDisplay implements Observer, DisplayElement
{

    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->calcForecast();
    }

    public function display(): string
    {
        return 'temperature: '.$this->temperature.'; '
            .'humidity: '.$this->humidity.'; '
            .'pressure: '.$this->pressure;
    }

    private function calcForecast()
    {
        $this->temperature++;
        $this->humidity++;
        $this->pressure++;
    }
}
