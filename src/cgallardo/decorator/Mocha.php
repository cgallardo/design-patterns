<?php

declare(strict_types=1);

namespace Cgallardo\Decorator;

class Mocha extends CondimentDecorator
{
    /**
     * @var Beverage
     */
    private $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.20;
    }

    public function description(): string
    {
        return $this->beverage->description() . ', Mocha';
    }
}
