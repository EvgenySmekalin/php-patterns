<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 19:22
 */

namespace App\FactoryMethod;


class PizzaTestDrive
{
    public function __construct()
    {
        $nyStore = new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        echo "Ethan ordered a " . $pizza->getName() . "\n\n";

        $pizza = $chicagoStore->orderPizza('cheese');
        echo "Joel ordered a " . $pizza->getName() . "\n";
    }
}