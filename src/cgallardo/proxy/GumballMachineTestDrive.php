<?php

declare(strict_types=1);

namespace Cgallardo\Proxy;

require __DIR__ . '/../../../vendor/autoload.php';

$count = 0;

$gumballMachine = new GumballMachine('Madrid', 6);
$monitor = new GumballMonitor($gumballMachine);

$monitor->report();
