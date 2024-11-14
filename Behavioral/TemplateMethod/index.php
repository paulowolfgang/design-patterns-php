<?php

use Behavioral\TemplateMethod\ClothingTaxes;
use Behavioral\TemplateMethod\ElectronicsTaxes;
use Behavioral\TemplateMethod\FoodTaxes;

require_once('../../autoloader.php');

$foodTaxes = new FoodTaxes();
$clothingTaxes = new ClothingTaxes();
$eletricalTaxes = new ElectronicsTaxes();

echo 'Preço final para alimentação: ' . $foodTaxes->calculatesProductTax(10);
echo '<br>';

echo 'Preço final para vestuário: ' . $clothingTaxes->calculatesProductTax(10);
echo '<br>';

echo 'Preço final para eletrônicos: ' . $eletricalTaxes->calculatesProductTax(10);
echo '<br>';
