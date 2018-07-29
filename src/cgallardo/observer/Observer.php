<?php

namespace cgallardo\observer;

interface Observer
{
    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     */
    public function update($temperature, $humidity, $pressure);
}