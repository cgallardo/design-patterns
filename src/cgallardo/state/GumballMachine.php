<?php

declare(strict_types=1);

namespace Cgallardo\State;

class GumballMachine
{
    /**
     * @var State
     */
    private $soldOutState;

    /**
     * @var State
     */
    private $noQuarterState;

    /**
     * @var State
     */
    private $hasQuarterState;

    /**
     * @var State
     */
    private $soldState;

    /**
     * @var State
     */
    private $winnerState;

    /**
     * @var State
     */
    private $state;

    /**
     * @var int
     */
    private $count = 0;

    public function __construct(int $numGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->count = $numGumballs;

        if ($numGumballs > 0) {
            $this->state = $this->noQuarterState;
        } else {
            $this->state = $this->soldOutState;
        }
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function releaseBall(): void
    {
        echo 'A gumball comes rolling out of the slot...' . PHP_EOL;
        if (0 !== $this->count) {
            $this->count--;
        }
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getSoldOutState(): State
    {
        return $this->soldOutState;
    }

    public function getSoldState(): State
    {
        return $this->soldState;
    }

    public function getNoQuarterState(): State
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState(): State
    {
        return $this->hasQuarterState;
    }

    public function getWinnerState(): State
    {
        return $this->winnerState;
    }

    public function __toString()
    {
        return 'Number of gumballs: ' . $this->count . ' - State: ' . $this->state . PHP_EOL;
    }
}
