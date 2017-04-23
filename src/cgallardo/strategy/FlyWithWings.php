<?php

namespace cgallardo\strategy;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "I'm flying\n";
    }
}