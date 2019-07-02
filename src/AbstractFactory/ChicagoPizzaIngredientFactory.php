<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 02.07.19
 * Time: 17:17
 */

namespace App\AbstractFactory;


use App\AbstractFactory\PizzaIngredient\Cheese\Cheese;
use App\AbstractFactory\PizzaIngredient\Cheese\MozzarellaCheese;
use App\AbstractFactory\PizzaIngredient\Clams\Clams;
use App\AbstractFactory\PizzaIngredient\Clams\FrozenClams;
use App\AbstractFactory\PizzaIngredient\Dough\Dough;
use App\AbstractFactory\PizzaIngredient\Dough\ThinCrustDough;
use App\AbstractFactory\PizzaIngredient\Pepperoni\Pepperoni;
use App\AbstractFactory\PizzaIngredient\Pepperoni\SlicedPepperoni;
use App\AbstractFactory\PizzaIngredient\Sauce\PlumTomatoSauce;
use App\AbstractFactory\PizzaIngredient\Sauce\Sauce;
use App\AbstractFactory\PizzaIngredient\Veggies\BlackOlives;
use App\AbstractFactory\PizzaIngredient\Veggies\EggPlant;
use App\AbstractFactory\PizzaIngredient\Veggies\Spinach;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Spinach(),
            new BlackOlives(),
            new EggPlant(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FrozenClams();
    }
}