<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 15:31
 */

namespace App\Observer;


class WeatherData implements Subject
{
    private $observers = [];
    private $temperature;
    private $humidity;
    private $pressure;

    public function registerObserver(Observer $observer)
    {
        array_push($this->observers, $observer);
    }

    public function removeObserver(Observer $observer)
    {
        $key = array_search($observer, $this->observers);

        if ($key >= 0) {
            unset($this->observers[$key]);
            $this->observers = array_values($this->observers);
        }

    }

    public function notifyObserver()
    {
        /** @var Observer $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementChanged()
    {
        $this->notifyObserver();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;

        $this->measurementChanged();
    }
}