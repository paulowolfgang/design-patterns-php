<?php

require_once '../../autoloader.php';

$decorator = new \Structural\Decorator\Wizard();
$decorator = new \Structural\Decorator\RingFire($decorator);
$decorator = new \Structural\Decorator\RingFire($decorator);
$decorator = new \Structural\Decorator\StrengthNecklace($decorator);
$decorator = new \Structural\Decorator\MagicSword($decorator);

echo $decorator->getName();
echo "\n";
echo "Ataque = {$decorator->getAttack()}";
echo "\n";
