<?php

declare(strict_types=1);

namespace Cgallardo\Factory;

class NYPizzaIngredientsFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClams(): Clams
    {
        return new FreshClams();
    }
}
