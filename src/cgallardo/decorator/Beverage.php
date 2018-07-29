<?php

declare(strict_types=1);

namespace Cgallardo\Decorator;

abstract class Beverage
{
    /**
     * @var string
     */
    protected $description = 'Unknown Beverage';

    public function description(): string
    {
        return $this->description;
    }

    abstract public function cost(): float;
}
