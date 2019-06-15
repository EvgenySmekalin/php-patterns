<?php

namespace App\Strategy;

use App\Strategy\FlyBehavior\FlyRocketPowered;

class MiniDuckSimulator
{

    public function __construct()
    {
        $mallard = new MallardDuck();
        $mallard->performQuack();
        $mallard->performFly();

        $model = new ModelDuck();
        $model->performFly();
        $model->setFlyBehavior(new FlyRocketPowered());
        $model->performFly();
    }
}



