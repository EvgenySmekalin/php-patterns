<?php

namespace App\Strategy;

use App\Strategy\FlyBehavior\FlyBehavior;
use App\Strategy\QuackBehavior\QuackBehavior;

/**
 * Class Duck
 * @package App\Strategy
 *
 * @property FlyBehavior $flyBehavior
 * @property QuackBehavior $quackBehavior
 */

abstract class Duck {

	protected $flyBehavior;
	protected $quackBehavior;

	public function __construct()
	{

	}

	public abstract function display();

	public function performFly()
	{
		$this->flyBehavior->fly();
	}

    public function performQuack()
    {
        $this->quackBehavior->quack();
	}

    public function swim()
    {
        echo "All duck float, even decoys!";
	}

	public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }
}