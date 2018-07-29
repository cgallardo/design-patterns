<?php

declare(strict_types=1);

namespace Cgallardo\Iterator;

class DinerMenuIterator implements Iterator
{
    /**
     * @var \SplFixedArray
     */
    private $items = [];

    /**
     * @var int
     */
    private $position = 0;

    public function __construct(\SplFixedArray $items)
    {
        $this->items = $items;
    }

    public function next()
    {
        $menuItem = $this->items->offsetGet($this->position);
        $this->position++;

        return $menuItem;
    }

    public function hasNext(): bool
    {
        if ($this->position >= $this->items->getSize() || null === $this->items->offsetGet($this->position)) {
            return false;
        } else {
            return true;
        }
    }
}
