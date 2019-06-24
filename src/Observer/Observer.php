<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 15:23
 */

namespace App\Observer;

/**
 * Interface Observer
 * @package App\Observer
 *
 * Все погодные элементы реализуют интерфейс Observer. С этим интерфейсом взаимодействует субъект, когда приходит время обновления наблюдателя
 */

interface Observer
{
    public function update($temp, $humidity, $pressure);
}