<?php

declare(strict_types=1);

namespace Cgallardo\Proxy;

class GumballMonitor
{
    /**
     * @var GumballMachine
     */
    private $machine;

    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }

    public function report(): void
    {
        echo "Gumball Machine " . $this->machine->location() . PHP_EOL;
        echo "Current inventory " . $this->machine->count() . PHP_EOL;
        echo "Current state" . $this->machine->state() . PHP_EOL;
    }
}
