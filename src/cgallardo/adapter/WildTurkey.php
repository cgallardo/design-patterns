<?php

declare(strict_types=1);

namespace Cgallardo\Adapter;

class WildTurkey implements Turkey
{
    public function fly(): void
    {
        echo 'Im flying a shot distance' . PHP_EOL;
    }

    public function gobble(): void
    {
        echo 'Gobble gobble' . PHP_EOL;
    }
}
