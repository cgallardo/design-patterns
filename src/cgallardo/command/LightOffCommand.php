<?php

declare(strict_types=1);

namespace Cgallardo\Command;

class LightOffCommand implements Command
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
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}
