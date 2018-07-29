<?php

declare(strict_types=1);

namespace Cgallardo\Command;

class LightOnCommand implements Command
{
    /**
     * @var Light
     */
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }

    public function undo()
    {
        $this->light->off();
    }
}
