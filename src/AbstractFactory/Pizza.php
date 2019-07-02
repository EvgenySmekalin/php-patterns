<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 02.07.19
 * Time: 17:25
 */

namespace App\AbstractFactory;

use App\AbstractFactory\PizzaIngredient\Cheese\Cheese;
use App\AbstractFactory\PizzaIngredient\Clams\Clams;
use App\AbstractFactory\PizzaIngredient\Dough\Dough;
use App\AbstractFactory\PizzaIngredient\Pepperoni\Pepperoni;
use App\AbstractFactory\PizzaIngredient\Sauce\Sauce;

/**
 * Class Pizza
 * @package App\AbstractFactory\PizzaIngredient
 *
 * @property string $name
 * @property Dough $dough
 * @property Sauce $sauce
 * @property array $veggies
 * @property Cheese $cheese
 * @property Pepperoni $pepperoni
 * @property Clams $clam
 */

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $veggies;
    protected $cheese;
    protected $pepperoni;
    protected $clam;
    protected $ingredientFactory;

    /**
     * @var PizzaIngredientFactory
     */
    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    abstract public function prepare();

    public function bake()
    {
        echo "Bake for 25 minutes at 350\n";
    }

    public function cut()
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

//    public function toString() : string
//    {
//
//    }
}