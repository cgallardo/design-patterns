<?php

declare(strict_types=1);

namespace Cgallardo\TemplateMethod;

class Tea extends CaffeineBeverage
{
    protected function brew(): void
    {
        echo 'Steeping the tea...' . PHP_EOL;
    }

    protected function addCondiments(): void
    {
        echo 'Adding lemon...' . PHP_EOL;
    }
}
