<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 17:37
 */

namespace App\Observer;


interface Weather extends \SplSubject
{
    /**
     * @return mixed
     */
    public function getTemperature();

    /**
     * @return mixed
     */
    public function getHumidity();

    /**
     * @return mixed
     */
    public function getPressure();
}