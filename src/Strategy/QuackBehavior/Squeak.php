<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 15.06.19
 * Time: 15:34
 */

namespace App\Strategy\QuackBehavior;


class Squeak implements QuackBehavior
{

    public function quack()
    {
        echo "Squeak\n";
    }
}