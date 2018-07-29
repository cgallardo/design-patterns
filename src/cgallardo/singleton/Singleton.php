<?php

declare(strict_types=1);

namespace Cgallardo\Singleton;

class Singleton
{
    /**
     * @var self
     */
    private static $uniqueInstance;

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (null === self::$uniqueInstance) {
            self::$uniqueInstance = new self();
        }

        return self::$uniqueInstance;
    }
}
