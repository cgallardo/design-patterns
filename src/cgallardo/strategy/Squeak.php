<?php

namespace cgallardo\strategy;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "Squeak\n";
    }
}