<?php

declare(strict_types=1);

namespace Cgallardo\Iterator;

class MenuItem
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var bool
     */
    private $isVegetarian = 0;

    /**
     * @var float
     */
    private $price;

    public function __construct(string $name, string $description, bool $isVegetarian, float $price)
    {
        $this->name         = $name;
        $this->description  = $description;
        $this->isVegetarian = $isVegetarian;
        $this->price        = $price;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function isVegetarian(): bool
    {
        return $this->isVegetarian;
    }

    public function price(): float
    {
        return $this->price;
    }
}
