<?php

namespace Creational\FactoryMethod\Product;

class DodgeDart implements CarProduct
{
    public function accelerate(): void
    {
        echo "Acelerando o Dodge Dart!\n";
    }

    public function decelerate(): void
    {
        echo "Desacelerando o Dodge Dart!\n";
    }

    public function changeGear(): void
    {
        echo "Trocando marcha no Dodge Dart!\n";
    }
}
