<?php

declare(strict_types=1);

namespace Cgallardo\TemplateMethod;

class TeaWithHook extends CaffeineBeverageWithHook
{
    protected function brew(): void
    {
        echo 'Steeping the tea...' . PHP_EOL;
    }

    protected function addCondiments(): void
    {
        echo 'Adding lemon...' . PHP_EOL;
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
