<?php

declare(strict_types=1);

namespace Cgallardo\State;

class NoQuarterState implements State
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
        echo 'You inserted a quarter' .  PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo 'You have not inserted a quarter' . PHP_EOL;
    }

    public function turnCrank()
    {
        echo 'You turned, but there is no quarter' . PHP_EOL;
    }

    public function dispense()
    {
        echo 'You need to pay first' . PHP_EOL;
    }

    public function __toString()
    {
        return 'no quarter';
    }

}
