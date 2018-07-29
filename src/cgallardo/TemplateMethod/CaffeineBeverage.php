<?php

declare(strict_types=1);

namespace Cgallardo\TemplateMethod;

abstract class CaffeineBeverage
{
    final public function prepareRecipe(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    private function boilWater(): void
    {
        echo 'Boiling water...' . PHP_EOL;
    }

    abstract protected function brew(): void;

    abstract protected function addCondiments(): void;

    private function pourInCup(): void
    {
        echo 'Pouring into cup...' . PHP_EOL;
    }
}
