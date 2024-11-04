<?php

require '../../autoloader.php';

$rocketAssemblerTestI = new Creational\Builder\RocketFactoryDirector(
    new Creational\Builder\RocketModelXBuilder()
);

$rocketAssemblerTestII = new Creational\Builder\RocketFactoryDirector(
    new Creational\Builder\RocketModelSBuilder()
);

$rocketAssemblerTestI->buildRockets();
echo $rocketAssemblerTestI->getRocket();

$rocketAssemblerTestII->buildRockets();
echo $rocketAssemblerTestII->getRocket();
