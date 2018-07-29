<?php

declare(strict_types=1);

namespace Cgallardo\Iterator;

class DinerMenu implements Menu
{
    private const MAX_ITEMS = 6;

    /**
     * @var int
     */
    private $numberOfItems = 0;

    /**
     * @var \SplFixedArray
     */
    private $menuItems;

    public function __construct()
    {
        $this->menuItems = new \SplFixedArray(self::MAX_ITEMS);

        $this->addItem(
            'Vegetarian BLT',
            '(Fakin) Bacon with lettuce & tomato on whole wheat',
            true,
            2.99
        );

        $this->addItem(
            'BLT',
            'Bacon with lettuce & tomato on whole wheat',
            false,
            2.99
        );

        $this->addItem(
            'Soup of the day',
            'Soup of the day, with a side of potato salad',
            false,
            3.29
        );

        $this->addItem(
            'Hot dog',
            'A hot dog with saurkraut, relish, onions, topped with cheese',
            false,
            3.05
        );
    }

    public function createIterator(): Iterator
    {
        return new DinerMenuIterator($this->menuItems);
    }

    public function addItem(string $name, string $description, bool $isVegetarian, float $price): void
    {
        $menuItem = new MenuItem($name, $description, $isVegetarian, $price);
        if ($this->numberOfItems >= self::MAX_ITEMS) {
            echo "Sorry, menu is full! Cant add items to menu!" . PHP_EOL;
        } else {
            $this->menuItems->offsetSet($this->numberOfItems, $menuItem);
            $this->numberOfItems++;
        }
    }
}
