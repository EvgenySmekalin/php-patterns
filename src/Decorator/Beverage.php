<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 17:50
 */

namespace App\Decorator;


abstract class Beverage
{
    protected $description;


    public abstract function cost();

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
}