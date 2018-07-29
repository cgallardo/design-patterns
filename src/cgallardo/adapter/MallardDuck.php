<?php

declare(strict_types=1);

namespace Cgallardo\Adapter;

class MallardDuck implements Duck
{
    public function fly(): void
    {
        echo 'Im flying' . PHP_EOL;
    }

    public function quack(): void
    {
        echo 'Quack' . PHP_EOL;
    }
}
