<?php

declare(strict_types=1);

namespace Cgallardo\Factory;

require __DIR__ . '/../../../vendor/autoload.php';

$nyStore = new NYPizzaStore();

$pizza = $nyStore->orderPizza('cheese');
echo 'Ethan ordered a ' . $pizza->name() . PHP_EOL;
var_dump($pizza);
echo PHP_EOL . PHP_EOL;
$pizza = $nyStore->orderPizza('cheese');
echo 'Karla ordered a ' . $pizza->name() . PHP_EOL;
var_dump($pizza);
