<?php

declare(strict_types=1);

namespace Cgallardo\Factory;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ('cheese' === $type) {
            return new ChicagoStyleCheesePizza();
        } elseif ('pepperoni' === $type) {
            return new PepperoniPizza();
        } elseif ('clam' === $type) {
            return new ClamPizza();
        } elseif ('veggie' === $type) {
            return new VeggiePizza();
        }

        return null;
    }
}
