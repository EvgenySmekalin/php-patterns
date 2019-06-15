<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 15.06.19
 * Time: 15:31
 */

namespace App\Strategy\FlyBehavior;


class FlyNoWay implements FlyBehavior
{

    public function fly()
    {
        echo "I can't fly\n";
    }
}