<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 18:43
 */

namespace App\Decorator;


class Whip extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Whip";
    }

    public function cost()
    {
        return 0.1 + $this->beverage->cost();
    }
}