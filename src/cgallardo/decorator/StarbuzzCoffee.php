<?php

declare(strict_types=1);

namespace Cgallardo\Decorator;

require __DIR__ . '/../../../vendor/autoload.php';

$beverage = new Espresso();
echo $beverage->description() . ' $' . $beverage->cost() . PHP_EOL;

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->description() . ' $' . $beverage2->cost() . PHP_EOL;

$beverage3 = new HouseBlend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->description() . ' $' . $beverage3->cost() . PHP_EOL;
