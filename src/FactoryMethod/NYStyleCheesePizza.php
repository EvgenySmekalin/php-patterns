<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 19:15
 */

namespace App\FactoryMethod;


class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        parent::__construct();

        $this->name  = "NY Style Sauce and Cheese Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";

        $this->toppings->push("Grated Reggiano Cheese");
    }
}