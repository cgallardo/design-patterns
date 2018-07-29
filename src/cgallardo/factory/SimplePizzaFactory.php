<?php

declare(strict_types=1);

namespace Cgallardo\Factory;

class SimplePizzaFactory
{
    public function createPizza(string $type)
    {
        $pizza = null;

        if ('cheese' === $type) {
            $pizza = new CheesePizza();
        } elseif ('pepperoni' === $type) {
            $pizza = new PepperoniPizza();
        } elseif ('clam' === $type) {
            $pizza = new ClamPizza();
        } elseif ('veggie' === $type) {
            $pizza = new VeggiePizza();
        }

        return $pizza;
    }
}
