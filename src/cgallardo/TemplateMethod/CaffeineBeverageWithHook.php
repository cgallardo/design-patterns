<?php

declare(strict_types=1);

namespace Cgallardo\TemplateMethod;

abstract class CaffeineBeverageWithHook
{
    final public function prepareRecipe(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
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

    protected function customerWantsCondiments(): bool
    {
        return true;
    }
}
