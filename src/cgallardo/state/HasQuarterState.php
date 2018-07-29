<?php

declare(strict_types=1);

namespace Cgallardo\State;

class HasQuarterState implements State
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
        echo 'You cannot insert another quarter.' . PHP_EOL;
    }

    public function ejectQuarter()
    {
        echo 'Quarter returned.' . PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank()
    {
        echo 'You turned...' . PHP_EOL;
        $winner = random_int(0, 10);
        if (0 == $winner && $this->gumballMachine->getCount() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense()
    {
        echo 'No gumball dispensed.' . PHP_EOL;
    }
    public function __toString()
    {
        return 'has quarter';
    }

}
