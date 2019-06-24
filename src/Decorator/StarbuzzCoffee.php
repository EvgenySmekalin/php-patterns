<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 18:39
 */

namespace App\Decorator;


class StarbuzzCoffee
{
    public function __construct()
    {
        $beverage = new Espresso();
        echo $beverage->getDescription() . " $" . $beverage->cost() . "\n";

        $beverage2 = new DarkRoast();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);
        echo $beverage2->getDescription() . " $" . $beverage2->cost() . "\n";

        $beverage3 = new HouseBlend();
        $beverage3 = new Soy($beverage3);
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Whip($beverage3);
        echo $beverage3->getDescription() . " $" . $beverage3->cost() . "\n";
    }

}