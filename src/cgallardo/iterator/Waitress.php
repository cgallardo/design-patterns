<?php

declare(strict_types=1);

namespace Cgallardo\Iterator;

class Waitress
{
    /**
     * @var Menu
     */
    private $pancakeHouseMenu;

    /**
     * @var Menu
     */
    private $dinerMenu;

    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu        = $dinerMenu;
    }

    public function printWholeMenu(): void
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        $dinerIterator   = $this->dinerMenu->createIterator();

        echo "MENU BREAKFAST" . PHP_EOL;
        $this->printMenu($pancakeIterator);
        echo "MENU LUNCH" . PHP_EOL;
        $this->printMenu($dinerIterator);
    }

    public function printMenu(Iterator $iterator): void
    {
        while ($iterator->hasNext()) {
            /** @var MenuItem $menuItem */
            $menuItem = $iterator->next();
            echo $menuItem->name() . PHP_EOL;
            echo $menuItem->price() . PHP_EOL;
            echo $menuItem->description() . PHP_EOL;
        }
    }
}
