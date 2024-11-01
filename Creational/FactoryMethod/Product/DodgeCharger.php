<?php

namespace Creational\FactoryMethod\Product;

class DodgeCharger implements CarProduct
{
    public function accelerate(): void
    {
        echo "Acelerando o Dodge Charger!\n";
    }

    public function decelerate(): void
    {
        echo "Desacelerando o Dodge Charger!\n";
    }

    public function changeGear(): void
    {
        echo "Trocando marcha no Dodge Charger!\n";
    }
}
