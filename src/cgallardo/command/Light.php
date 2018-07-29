<?php

declare(strict_types=1);

namespace Cgallardo\Command;

class Light
{
    /**
     * @var string
     */
    private $lightName;

    public function __construct(string $lightName = '')
    {
        $this->lightName = $lightName;
    }

    public function on()
    {
        echo PHP_EOL . $this->lightName . " light is on" . PHP_EOL;
    }

    public function off()
    {
        echo PHP_EOL . $this->lightName . " light is off" . PHP_EOL;
    }
}
