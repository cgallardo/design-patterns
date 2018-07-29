<?php

declare(strict_types=1);

namespace Cgallardo\State;

class SoldState implements State
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
        echo 'Please wait, we are already giving you a gumball.' . PHP_EOL;
    }

    public function ejectQuarter()
    {
        echo 'Sorry, you already turned the crank.' . PHP_EOL;
    }

    public function turnCrank()
    {
        echo 'Turning twice does not get you another gumball.' . PHP_EOL;
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo 'Oups, out of gumballs!' . PHP_EOL;
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
    public function __toString()
    {
        return 'sold';
    }

}
