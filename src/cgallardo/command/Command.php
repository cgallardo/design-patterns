<?php

declare(strict_types=1);

namespace Cgallardo\Command;

interface Command
{
    public function execute();

    public function undo();
}
