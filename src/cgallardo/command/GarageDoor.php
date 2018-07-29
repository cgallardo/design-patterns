<?php

declare(strict_types=1);

namespace Cgallardo\Command;

class GarageDoor
{
    public function open()
    {
        echo PHP_EOL . "Opening garage..." . PHP_EOL;
    }

    public function close()
    {
        echo PHP_EOL . "Closing garage..." . PHP_EOL;
    }
}
