<?php

declare(strict_types=1);

namespace Cgallardo\Iterator;

class PancakeHouseMenuIterator implements Iterator
{
    /**
     * @var array
     */
    private $items = [];

    /**
     * @var int
     */
    private $position = 0;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function next()
    {
        $menuItem = $this->items[$this->position];
        $this->position++;

        return $menuItem;
    }

    public function hasNext(): bool
    {
        if (($this->position >= sizeof($this->items)) || (!isset($this->items[$this->position]))) {
            return false;
        } else {
            return true;
        }
    }
}
