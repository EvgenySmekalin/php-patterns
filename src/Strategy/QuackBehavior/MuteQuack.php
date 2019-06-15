<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 15.06.19
 * Time: 15:33
 */

namespace App\Strategy\QuackBehavior;


class MuteQuack implements QuackBehavior
{

    public function quack()
    {
        echo "<< Silence >>/n";
    }
}