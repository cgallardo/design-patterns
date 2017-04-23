<?php
    use cgallardo\strategy\MallardDuck;
    use cgallardo\strategy\FlyWithWings;

    require __DIR__ . '/../../../vendor/autoload.php';

    $mallard = new MallardDuck();
    $mallard->performQuack();
    $mallard->performFly();

    $mallard->setFlyBehavior(new FlyWithWings());
    $mallard->performQuack();
    $mallard->performFly();
    $mallard->swim();
    $mallard->display();
