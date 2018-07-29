<?php

declare(strict_types=1);

namespace Cgallardo\TemplateMethod;

class CoffeeWithHook extends CaffeineBeverageWithHook
{
    protected function brew(): void
    {
        echo 'Dripping Coffee through filter...' . PHP_EOL;
    }

    protected function addCondiments(): void
    {
        echo 'Adding sugar and milk...' . PHP_EOL;
    }

    protected function customerWantsCondiments(): bool
    {
        $x = random_int(0, 1);

        if (1 === $x) {
            return true;
        }

        return false;
    }
}
