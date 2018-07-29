<?php

declare(strict_types=1);

namespace Cgallardo\State;

interface State
{
    public function insertQuarter();
    public function ejectQuarter();
    public function turnCrank();
    public function dispense();
}
