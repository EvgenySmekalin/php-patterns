<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 19:33
 */

namespace App\AbstractFactory;


class NYPizzaStore extends PizzaStore
{

    protected function createPizza(string $type): Pizza
    {
        $pizzaIngredientFactory = new NYPizzaIngredientFactory();

        switch ($type) {
            case 'cheese' :
                $pizza = new CheesePizza($pizzaIngredientFactory);
                $pizza->setName("New York Style Cheese Pizza\n");
                return $pizza;
            default:
                return null;
        }
    }
}