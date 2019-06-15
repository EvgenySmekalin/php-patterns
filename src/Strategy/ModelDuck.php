<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 15.06.19
 * Time: 16:02
 */

namespace App\Strategy;


use App\Strategy\FlyBehavior\FlyNoWay;
use App\Strategy\QuackBehavior\Quack;

class ModelDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay;
        $this->quackBehavior = new Quack;
    }

    public function display()
    {
        echo "I'm model duck";
    }
}