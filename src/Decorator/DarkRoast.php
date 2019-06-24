<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 18:41
 */

namespace App\Decorator;


class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = "Dark Roast Coffee";
    }

    public function cost()
    {
        return 0.99;
    }
}