<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 19:22
 */

namespace App\AbstractFactory;


class PizzaTestDrive
{
    public function __construct()
    {
        $nyStore = new NYPizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        var_dump($pizza);
        echo "Ethan ordered a " . $pizza->getName() . "\n\n";
    }
}