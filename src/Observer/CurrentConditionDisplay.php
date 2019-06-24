<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 15:45
 */

namespace App\Observer;

/**
 * Class CurrentConditionDisplay
 * @package App\Observer
 *
 * @property Subject $weatherData
 */

class CurrentConditionDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display()
    {
        echo "Current conditions {$this->temperature} F degrees and {$this->humidity} % humidity\n";
    }

    public function update($temp, $humidity, $pressure)
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;

        $this->display();
    }
}