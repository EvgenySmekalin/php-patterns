<?php
/**
 * Created by PhpStorm.
 * User: top
 * Date: 24.06.19
 * Time: 19:26
 */

namespace App\FactoryMethod;

/**
 * Class PizzaStore
 * @package App\FactoryMethod\
 *
 * Абсстрактный класс-создатель; Определяет абстрактный фабричный метод, реализуемый субклассами для создания продуктов
 */

abstract class PizzaStore
{
    public function orderPizza(string $type) : Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    protected abstract function createPizza(string $type) : Pizza;
}