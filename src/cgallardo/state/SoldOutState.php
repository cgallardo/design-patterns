<?php

declare(strict_types=1);

namespace Cgallardo\State;

class SoldOutState implements State
{
    /**
     * @var GumballMachine
     */
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo 'You cannot insert a quarter, the machine is sold out' . PHP_EOL;
    }

    public function ejectQuarter()
    {
        echo 'You cannot eject, you have not inserted a quarter yet.' . PHP_EOL;
    }

    public function turnCrank()
    {
        echo 'You turned, but there are no gumballs.' . PHP_EOL;
    }

    public function dispense()
    {
        echo 'No gumballs dispensed.' . PHP_EOL;
    }

    public function __toString()
    {
        return 'sold out';
    }
}
