<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 15.06.19
 * Time: 15:18
 */

namespace App\Strategy\QuackBehavior;


class Quack implements QuackBehavior
{

    public function quack()
    {
        echo "Quack!\n";
    }
}