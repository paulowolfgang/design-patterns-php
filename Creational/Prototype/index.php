<?php

require_once('../../autoloader.php');

$buyers = [
  'Paulo Silva',
  'Pedro Lucas',
  'Ana Lúcia'
];

$bookPhp = new \Creational\Prototype\BookPhpPrototype();
$bookPhp->setTitle('Padrões de Projetos em PHP 7.4');

$books = [];

foreach ($buyers as $nameBuyer)
{
    $bookBuyer = clone $bookPhp;
    $bookBuyer->setCardholderName($nameBuyer);

    $books[] = $bookBuyer;
}

echo '<pre>';
var_dump($books);
echo '</pre>';
