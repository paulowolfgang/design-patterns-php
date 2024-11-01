<?php

namespace Creational\FactoryMethod\Product;

class TeslaModelX implements CarProduct
{
    public function accelerate(): void
    {
        echo "Acelerando o Tesla modelo X!\n";
    }

    public function decelerate(): void
    {
        echo "Desacelerando o Tesla modelo X!\n";
    }

    public function changeGear(): void
    {
        echo "Trocando marcha no Tesla modelo X!\n";
    }
}
