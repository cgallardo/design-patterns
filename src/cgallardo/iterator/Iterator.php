<?php

declare(strict_types=1);

namespace Cgallardo\Iterator;

interface Iterator
{
    public function hasNext(): bool;

    public function next();
}
