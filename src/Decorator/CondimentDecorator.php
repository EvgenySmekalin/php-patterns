<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 17:51
 */

namespace App\Decorator;


abstract class CondimentDecorator extends Beverage
{
    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}