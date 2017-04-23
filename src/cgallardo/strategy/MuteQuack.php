<?php

namespace cgallardo\strategy;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "<< Silence >>\n";
    }
}