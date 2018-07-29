<?php

declare(strict_types=1);

namespace Cgallardo\Command;

class GarageDoorOpenCommand implements Command
{
    /**
     * @var GarageDoor
     */
    private $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute()
    {
        $this->garageDoor->open();
    }

    public function undo()
    {
        $this->garageDoor->close();
    }
}
