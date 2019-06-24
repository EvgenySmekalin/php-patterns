<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 17:58
 */

namespace App\Decorator;


class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = "Espresso";
    }

    public function cost()
    {
        return 1.99;
    }
}