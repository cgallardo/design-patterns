<?php

declare(strict_types=1);

namespace Cgallardo\Iterator;

class PancakeHouseMenu implements Menu
{
    /**
     * @var array
     */
    private $menuItems;

    public function __construct()
    {
        $this->menuItems = [];

        $this->addItem(
            'K&B Pancake Breakfast',
            'Pancakes with scramble eggs and toast',
            true,
            2.99
        );

        $this->addItem(
            'Regular Pancake Breakfast',
            'Pancakes with fried eggs and sausage',
            false,
            2.99
        );

        $this->addItem(
            'Blueberry Pancakes',
            'Pancakes made with fresh blueberries',
            true,
            3.49
        );

        $this->addItem(
            'Waffles',
            'Waffles with your choice of blueberries or strawberries',
            true,
            3.59
        );
    }

    public function createIterator(): Iterator
    {
        return new PancakeHouseMenuIterator($this->menuItems);
    }

    public function addItem(string $name, string $description, bool $isVegetarian, float $price): void
    {
        $this->menuItems[] = new MenuItem($name, $description, $isVegetarian, $price);
    }
}
