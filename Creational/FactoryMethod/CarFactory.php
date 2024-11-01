<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Product\CarProduct;

interface CarFactory
{
    public function createCar(string $carModel): CarProduct;
}
