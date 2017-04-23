<?php

namespace cgallardo\strategy;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        echo "I'm a Mallard duck\n";
    }
}