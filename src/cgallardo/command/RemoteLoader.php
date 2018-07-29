<?php

declare(strict_types=1);

namespace Cgallardo\Command;

require __DIR__ . '/../../../vendor/autoload.php';

$remoteControl = new RemoteControlWithUndo();

$livingRoomLight = new Light('Living Room');
$kitchenLight = new Light('kitchen');
$garageDoor = new GarageDoor();

$livingRoomLightOn = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);
$kitchenLightOn = new LightOnCommand($kitchenLight);
$kitchenLightOff = new LightOffCommand($kitchenLight);
$garageDoorOpen = new GarageDoorOpenCommand($garageDoor);
$garageDoorClose = new GarageDoorCloseCommand($garageDoor);

$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
$remoteControl->setCommand(2, $garageDoorOpen, $garageDoorClose);

$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
$remoteControl->undoButtonWasPushed();
$remoteControl->onButtonWasPushed(1);
$remoteControl->offButtonWasPushed(1);
$remoteControl->undoButtonWasPushed();
$remoteControl->onButtonWasPushed(2);
$remoteControl->offButtonWasPushed(2);
$remoteControl->undoButtonWasPushed();

$partyOnMacro = new MacroCommand(
    [
        $livingRoomLightOn,
        $kitchenLightOn,
        $garageDoorOpen,
    ]
);

$partyOffMacro = new MacroCommand(
    [
        $livingRoomLightOff,
        $kitchenLightOff,
        $garageDoorClose,
    ]
);

$remoteControl->setCommand(0, $partyOnMacro, $partyOffMacro);
echo 'Macro ON! ---- ' . PHP_EOL;
$remoteControl->onButtonWasPushed(0);
echo 'Macro OFF! ---- ' . PHP_EOL;
$remoteControl->offButtonWasPushed(0);
