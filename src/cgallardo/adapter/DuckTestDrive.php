<?php

declare(strict_types=1);

namespace Cgallardo\Adapter;

require __DIR__ . '/../../../vendor/autoload.php';

$duck = new MallardDuck();
$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

echo 'The Turkey says...' . PHP_EOL;
$turkey->gobble();
$turkey->fly();

echo 'The Duck says...' . PHP_EOL;
testDuck($duck);

echo 'The TurkeyAdapter says...' . PHP_EOL;
testDuck($turkeyAdapter);


function testDuck(Duck $duck)
{
    $duck->quack();
    $duck->fly();
}
