<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 18:01
 */

namespace App\Decorator;


class Mocha extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    public function cost()
    {
        return .20 + $this->beverage->cost();
    }
}