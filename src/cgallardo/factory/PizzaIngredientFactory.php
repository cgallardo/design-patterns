<?php

declare(strict_types=1);

namespace Cgallardo\Factory;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    /**
     * @return Veggie[]
     */
    public function createVeggies(): array;

    public function createPepperoni(): Pepperoni;

    public function createClams(): Clams;
}
