<?php

declare(strict_types=1);

namespace Cgallardo\State;

class WinnerState implements State
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
        throw new \BadMethodCallException();
    }

    public function ejectQuarter()
    {
        throw new \BadMethodCallException();
    }

    public function turnCrank()
    {
        throw new \BadMethodCallException();
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if (0 === $this->gumballMachine->getCount()) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            echo 'You are a winner!! you got 2 gumballs for your quarter.' . PHP_EOL;
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo 'Oups!, out of gumballs' . PHP_EOL;
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }
    public function __toString()
    {
        return 'winner';
    }

}
