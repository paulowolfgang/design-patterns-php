<?php

require_once('../../autoloader.php');

use Creational\Singleton\LogsSingleton;

$instance01 = LogsSingleton::getInstance();
$instance01->writeLog(['teste 01']);

$instance02 = LogsSingleton::getInstance();
$instance02->writeLog(['teste 02']);

if($instance01 === $instance02)
{
    echo "As instâncias são exatamente as mesmas!";
}
