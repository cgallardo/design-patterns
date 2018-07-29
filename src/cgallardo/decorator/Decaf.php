<?php

declare(strict_types=1);

namespace Cgallardo\Decorator;

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = 'Decaf Coffee';
    }

    public function cost(): float
    {
        return 1.05;
    }
}
