<?php

declare(strict_types=1);

namespace Cgallardo\Factory;

abstract class Pizza
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Dough
     */
    protected $dough;

    /**
     * @var Sauce
     */
    protected $sauce;

    /**
     * @var Veggie[]
     */
    protected $veggies;

    /**
     * @var Cheese
     */
    protected $cheese;

    /**
     * @var Pepperoni
     */
    protected $pepperoni;

    /**
     * @var Clams
     */
    protected $clams;

    abstract public function prepare(): void;

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350' . PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices' . PHP_EOL;
    }

    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box' . PHP_EOL;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
