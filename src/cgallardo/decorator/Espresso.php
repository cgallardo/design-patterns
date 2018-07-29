<?php

declare(strict_types=1);

namespace Cgallardo\Decorator;

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    public function cost(): float
    {
        return 1.99;
    }
}
