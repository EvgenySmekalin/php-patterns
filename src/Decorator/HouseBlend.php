<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 17:59
 */

namespace App\Decorator;


class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = "House Blend Coffee";
    }

    public function cost()
    {
        return 0.89;
    }
}