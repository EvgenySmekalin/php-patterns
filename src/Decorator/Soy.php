<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 18:43
 */

namespace App\Decorator;


class Soy extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Soy";
    }

    public function cost()
    {
        return 0.15 + $this->beverage->cost();
    }
}