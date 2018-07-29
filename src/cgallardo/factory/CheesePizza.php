<?php

declare(strict_types=1);

namespace Cgallardo\Factory;

class CheesePizza extends Pizza
{
    /**
     * @var PizzaIngredientFactory
     */
    private $pizzaIngredientFactory;

    public function __construct(PizzaIngredientFactory $pizzaIngredientFactory)
    {
        $this->pizzaIngredientFactory = $pizzaIngredientFactory;
    }

    public function prepare(): void
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
        $this->dough = $this->pizzaIngredientFactory->createDough();
        $this->sauce = $this->pizzaIngredientFactory->createSauce();
        $this->cheese = $this->pizzaIngredientFactory->createCheese();
    }

    public function bake(): void
    {
    }

    public function cut(): void
    {
    }

    public function box(): void
    {
    }
}
