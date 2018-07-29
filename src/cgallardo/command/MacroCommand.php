<?php

declare(strict_types=1);

namespace Cgallardo\Command;

class MacroCommand implements Command
{
    /**
     * @var Command[]
     */
    private $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo()
    {
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }
}
