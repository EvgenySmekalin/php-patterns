<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 19:36
 */

namespace App\FactoryMethod;


class ChicagoPizzaStore extends PizzaStore
{

    protected function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'cheese': return new ChicagoStyleCheesePizza();
            default: return null;
        }
    }
}