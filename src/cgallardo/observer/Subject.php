<?php

namespace cgallardo\observer;

interface Subject
{
    /**
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer);

    /**
     * @param Observer $observer
     */
    public function removeObserver(Observer $observer);
    
    public function notifyObservers();
}