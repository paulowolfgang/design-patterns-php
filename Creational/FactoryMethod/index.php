<?php

use Creational\FactoryMethod\DodgeFactory;
use Creational\FactoryMethod\TeslaFactory;

require_once('../../autoloader.php');

$teslaFactory = new TeslaFactory();
$dodgeFactory = new DodgeFactory();

try {
    $teslaModelS  = $teslaFactory->createCar('model_s');
    $teslaModelX  = $teslaFactory->createCar('model_x');

    $dodgeCharger = $dodgeFactory->createCar('charger');
    $dodgeDart    = $dodgeFactory->createCar('dart');
} catch (Exception $e){
    echo $e->getMessage();
}

echo $teslaModelS->accelerate();
echo $teslaModelS->decelerate();
echo $teslaModelS->changeGear();
echo "\n";

echo $teslaModelX->accelerate();
echo $teslaModelX->decelerate();
echo $teslaModelX->changeGear();
echo "\n";

echo $dodgeCharger->accelerate();
echo $dodgeCharger->decelerate();
echo $dodgeCharger->changeGear();
echo "\n";

echo $dodgeDart->accelerate();
echo $dodgeDart->decelerate();
echo $dodgeDart->changeGear();
echo "\n";
