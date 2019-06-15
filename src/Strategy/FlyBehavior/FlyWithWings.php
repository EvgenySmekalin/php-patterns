<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 15.06.19
 * Time: 15:22
 */

namespace App\Strategy\FlyBehavior;


class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        echo "I'm flying!!\n";
    }
}