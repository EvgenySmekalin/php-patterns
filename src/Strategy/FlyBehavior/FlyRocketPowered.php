<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 15.06.19
 * Time: 16:03
 */

namespace App\Strategy\FlyBehavior;


class FlyRocketPowered implements FlyBehavior
{

    public function fly()
    {
        echo "I'm flying with a rocket\n";
    }
}