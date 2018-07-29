<?php

declare(strict_types=1);

namespace Cgallardo\Command;

class GarageDoorCloseCommand implements Command
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
        $this->garageDoor->close();
    }

    public function undo()
    {
        $this->garageDoor->open();
    }
}
