<?php

declare(strict_types=1);

namespace Cgallardo\Command;

class RemoteControlWithUndo
{
    private const NUM_SLOTS = 7;

    /**
     * @var Command[]
     */
    private $onCommands;

    /**
     * @var Command[]
     */
    private $offCommands;

    /**
     * @var Command
     */
    private $undoCommand;

    public function __construct()
    {
        $this->onCommands  = new \SplFixedArray(self::NUM_SLOTS);
        $this->offCommands = new \SplFixedArray(self::NUM_SLOTS);

        for ($i = 0; $i < self::NUM_SLOTS; $i++) {
            $this->onCommands[$i]  = new NoCommand();
            $this->offCommands[$i] = new NoCommand();
        }

        $this->undoCommand = new NoCommand();
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot]  = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot)
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed(int $slot)
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed()
    {
        $this->undoCommand->undo();
    }
}
