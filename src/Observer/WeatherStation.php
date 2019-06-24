<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 15:51
 */

namespace App\Observer;


class WeatherStation
{
    public function __construct()
    {
        $weatherData = new WeatherData();

        $currentDisplay = new CurrentConditionDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->detach($currentDisplay);
        // Will now show anything because observer is unset
        $weatherData->setMeasurements(80, 65, 30.4);
    }
}