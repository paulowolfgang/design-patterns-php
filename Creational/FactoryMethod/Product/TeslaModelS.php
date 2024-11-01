<?php

namespace Creational\FactoryMethod\Product;

class TeslaModelS implements CarProduct
{
    public function accelerate(): void
    {
        echo "Acelerando o Tesla modelo S!\n";
    }

    public function decelerate(): void
    {
        echo "Desacelerando o Tesla modelo S!\n";
    }

    public function changeGear(): void
    {
        echo "Trocando marcha no Tesla modelo S!\n";
    }
}
