<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 15:25
 */

namespace App\Observer;

/**
 * Interface DisplayElement
 * @package App\Observer
 *
 * Интерфейс, реализуемы всеми визуальными элементами
 */

interface DisplayElement
{
    public function display();
}