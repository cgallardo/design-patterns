<?php

declare(strict_types=1);

namespace Cgallardo\Iterator;

interface Menu
{
    public function createIterator(): Iterator;
}
