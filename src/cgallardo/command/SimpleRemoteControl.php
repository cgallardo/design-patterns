<?php

declare(strict_types=1);

namespace Cgallardo\Command;

class SimpleRemoteControl
{
    /**
     * @var Command
     */
    private $slot;

    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        $this->slot->execute();
    }
}
