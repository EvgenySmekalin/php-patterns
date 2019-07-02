<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 28.06.19
 * Time: 20:24
 */

namespace App\AbstractFactory;


use App\AbstractFactory\PizzaIngredient\Cheese\Cheese;
use App\AbstractFactory\PizzaIngredient\Clams\Clams;
use App\AbstractFactory\PizzaIngredient\Dough\Dough;
use App\AbstractFactory\PizzaIngredient\Pepperoni\Pepperoni;
use App\AbstractFactory\PizzaIngredient\Sauce\Sauce;

interface PizzaIngredientFactory
{
    public function createDough()     : Dough;
    public function createSauce()     : Sauce;
    public function createCheese()    : Cheese;
    public function createVeggies()   : array;
    public function createPepperoni() : Pepperoni;
    public function createClam()      : Clams;
}