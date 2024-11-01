<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Product\{
  CarProduct, TeslaModelS, TeslaModelX
};

class TeslaFactory implements CarFactory
{
    public function createCar(string $carModel): CarProduct
    {
        if ($carModel == 'model_x')
        {
            return new TeslaModelX();
        } elseif ($carModel == 'model_s'){
            return new TeslaModelS();
        } else {
            throw new \Exception("Modelo de carro: \"{$carModel}\" não suportado pelo sistema");
        }
    }
}
