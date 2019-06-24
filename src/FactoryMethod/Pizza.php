<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 19:07
 */

namespace App\FactoryMethod;


class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings;

    public function __construct()
    {
        $this->toppings = new \SplDoublyLinkedList();
    }

    public function prepare()
    {
        echo "Preparing {$this->name} \n";
        echo "Tossing dough...\n";
        echo "Adding sauce...\n";
        echo "Adding toppings:\n";

        foreach ($this->toppings as $topping) {
            echo "  {$topping}\n";
        }
    }

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

    public function getName()
    {
        return $this->name;
    }

}