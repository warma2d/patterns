<?php declare(strict_types=1);

use Patterns\BehavioralPatterns\Observer\Observers\CurrentConditionsDisplay;
use Patterns\BehavioralPatterns\Observer\Subject\WeatherData;
use PHPUnit\Framework\TestCase;

final class ObserverTest extends TestCase
{
    public function testCurrentConditionsDisplay(): void
    {
        $currentConditionsDisplay = new CurrentConditionsDisplay();

        $subject = new WeatherData();
        $subject->registerObserver($currentConditionsDisplay);

        $temperature = 10;
        $humidity = 78;
        $pressure = 768;

        $subject->setMeasurements($temperature, $humidity, $pressure);

        $string = 'temperature: '.$temperature.'; '
        .'humidity: '.$humidity.'; '
        .'pressure: '.$pressure;

        $this->assertEquals(
            $string,
            $currentConditionsDisplay->display()
        );
    }
}
