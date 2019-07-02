<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 28.06.19
 * Time: 20:30
 */

namespace App\AbstractFactory;


use App\AbstractFactory\PizzaIngredient\Cheese\Cheese;
use App\AbstractFactory\PizzaIngredient\Cheese\ReggianoCheese;
use App\AbstractFactory\PizzaIngredient\Clams\Clams;
use App\AbstractFactory\PizzaIngredient\Clams\FreshClams;
use App\AbstractFactory\PizzaIngredient\Dough\Dough;
use App\AbstractFactory\PizzaIngredient\Dough\ThinCrustDough;
use App\AbstractFactory\PizzaIngredient\Pepperoni\Pepperoni;
use App\AbstractFactory\PizzaIngredient\Pepperoni\SlicedPepperoni;
use App\AbstractFactory\PizzaIngredient\Sauce\MarinaraSauce;
use App\AbstractFactory\PizzaIngredient\Sauce\Sauce;
use App\AbstractFactory\PizzaIngredient\Veggies\Garlic;
use App\AbstractFactory\PizzaIngredient\Veggies\Mushroom;
use App\AbstractFactory\PizzaIngredient\Veggies\Onion;
use App\AbstractFactory\PizzaIngredient\Veggies\RedPepper;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough() : Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce() : Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese() : Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies() : array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
    }

    public function createPepperoni() : Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam() : Clams
    {
        return new FreshClams();
    }
}