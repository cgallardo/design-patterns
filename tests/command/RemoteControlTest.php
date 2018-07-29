<?php

declare(strict_types=1);

namespace CgallardoTests\Command;

use Cgallardo\Command\GarageDoor;
use Cgallardo\Command\GarageDoorOpenCommand;
use Cgallardo\Command\Light;
use Cgallardo\Command\LightOnCommand;
use Cgallardo\Command\SimpleRemoteControl;
use PHPUnit\Framework\TestCase;

class RemoteControlTest extends TestCase
{
    /**
     * @test
     */
    public function lightShouldBeOn()
    {
        $remote = new SimpleRemoteControl();
        $light  = new Light();

        $remote->setCommand(new LightOnCommand($light));
        $remote->buttonWasPressed();
        $remote->setCommand(new GarageDoorOpenCommand(new GarageDoor()));
        $remote->buttonWasPressed();
    }
}
