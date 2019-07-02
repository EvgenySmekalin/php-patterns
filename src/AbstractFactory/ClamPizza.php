<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 02.07.19
 * Time: 17:36
 */

namespace App\AbstractFactory;


class ClamPizza extends Pizza
{
    public function prepare()
    {
        echo "Preparing {$this->name}";
        $this->dough  = $this->ingredientFactory->createDough();
        $this->sauce  = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam   = $this->ingredientFactory->createClam();
    }
}