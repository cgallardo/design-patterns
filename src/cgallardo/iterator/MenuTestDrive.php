<?php

declare(strict_types=1);

namespace Cgallardo\Iterator;

require __DIR__ . '/../../../vendor/autoload.php';

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu        = new DinerMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu);
$waitress->printWholeMenu();
