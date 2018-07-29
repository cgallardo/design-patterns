<?php

declare(strict_types=1);

namespace Cgallardo\Factory;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientsFactory();

        if ('cheese' === $type) {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');
        } elseif ('pepperoni' === $type) {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');
        } elseif ('clam' === $type) {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');
        } elseif ('veggie' === $type) {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('New York Style Veggie Pizza');
        }

        return $pizza;
    }
}
