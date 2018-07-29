<?php

declare(strict_types=1);

namespace Cgallardo\Adapter;

class TurkeyAdapter implements Duck
{
    /**
     * @var Turkey
     */
    private $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }
}
