<?php

namespace cgallardo\strategy;

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "Quack\n";
    }
}