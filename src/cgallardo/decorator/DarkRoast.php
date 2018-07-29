<?php

declare(strict_types=1);

namespace Cgallardo\Decorator;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast Coffee';
    }

    public function cost(): float
    {
        return 0.99;
    }
}
