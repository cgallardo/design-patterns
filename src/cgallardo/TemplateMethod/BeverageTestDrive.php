<?php

declare(strict_types=1);

namespace Cgallardo\TemplateMethod;

require __DIR__ . '/../../../vendor/autoload.php';

$teaHook = new TeaWithHook();
$coffeeHook = new CoffeeWithHook();

echo 'Making tea...' .  PHP_EOL;
$teaHook->prepareRecipe();

echo 'Making coffee...' .  PHP_EOL;
$coffeeHook->prepareRecipe();
