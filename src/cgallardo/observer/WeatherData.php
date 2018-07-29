<?php

namespace cgallardo\observer;

class WeatherData implements Subject
{
    /**
     * @var Observer[]
     */
    private $observers;

    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $pressure;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage(); // TODO
    }

    /**
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @param Observer $observer
     */
    public function removeObserver(Observer $observer)
    {
        $this->observers->detach($observer);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     */
    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }
}