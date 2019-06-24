<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 19:33
 */

namespace App\FactoryMethod;


class NYPizzaStore extends PizzaStore
{

    protected function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'cheese' : return new NYStyleCheesePizza();
            default: return null;
        }
    }
}