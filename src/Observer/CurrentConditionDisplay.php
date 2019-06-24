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
 * @property \SplSubject $weatherData
 */

class CurrentConditionDisplay implements \SplObserver, DisplayElement
{
    private $temperature;
    private $humidity;
    private $weatherData;

    public function __construct(\SplSubject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    public function display()
    {
        echo "Current conditions {$this->temperature} F degrees and {$this->humidity} % humidity\n";
    }

    /**
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        /** @var Weather $subject */
        $this->temperature = $subject->getTemperature();
        $this->humidity = $subject->getHumidity();

        $this->display();
    }
}