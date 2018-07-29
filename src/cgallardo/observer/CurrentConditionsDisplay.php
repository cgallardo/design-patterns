<?php

namespace cgallardo\observer;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;

    private $humidity;

    private $weatherData;

    /**
     * @param Subject $weatherData
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     */
    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo "Current conditions: {$this->temperature} F degrees and {$this->humidity} % humidity";
    }
}