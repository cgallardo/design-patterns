<?php

declare(strict_types=1);

namespace Cgallardo\Proxy;

class GumballMachine
{
    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $state;

    /**
     * @var int
     */
    private $count = 0;

    public function __construct(string $location, int $count)
    {
        $this->count    = $count;
        $this->location = $location;
        $this->state    = '';
    }

    public function count(): int
    {
        return $this->count;
    }

    public function location(): string
    {
        return $this->location;
    }

    public function state(): string
    {
        return $this->state;
    }
}
