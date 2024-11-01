<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Product\{
    CarProduct, DodgeCharger, DodgeDart
};

class DodgeFactory implements CarFactory
{
    /**
     * @param string $carModel
     * return CarProduct
     * throws \Exception
     */
    public function createCar(string $carModel): CarProduct
    {
        if ($carModel == 'charger')
        {
            return new DodgeCharger();
        } elseif ($carModel == 'dart'){
            return new DodgeDart();
        } else {
            throw new \Exception("Modelo de carro: \"{$carModel}\" não suportado pelo sistema");
        }
    }
}