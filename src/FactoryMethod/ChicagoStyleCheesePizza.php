<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 19:19
 */

namespace App\FactoryMethod;


class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        parent::__construct();

        $this->name  = "Chicago Style Deep Dish Cheese Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";

        $this->toppings->push("Shredded Mozzarella Cheese");
    }

    public function cut()
    {
        echo "Cutting the pizza into square slices\n";
    }
}