<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 02.07.19
 * Time: 17:32
 */

namespace App\AbstractFactory;


class CheesePizza extends Pizza
{
    public function prepare()
    {
        echo "Preparing {$this->name}";
        $this->dough  = $this->ingredientFactory->createDough();
        $this->sauce  = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}