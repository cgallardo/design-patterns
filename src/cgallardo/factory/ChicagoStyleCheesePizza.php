<?php

declare(strict_types=1);

namespace Cgallardo\Factory;

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Chicago Style Deep Dish Cheese Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";

        $this->toppings[] = "Shredded Mozzarella Cheese";
    }

    public function cut(): void
    {
        echo "Cutting de pizza into square slices" . PHP_EOL;
    }
}
