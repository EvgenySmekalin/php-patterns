<?php

namespace App\Strategy;

use App\Strategy\FlyBehavior\FlyWithWings;
use App\Strategy\QuackBehavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack;
        $this->flyBehavior = new FlyWithWings;
    }

    public function display()
    {
        echo "I am real Mallard duck";
    }
}