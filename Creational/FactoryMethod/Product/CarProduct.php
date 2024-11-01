<?php

namespace Creational\FactoryMethod\Product;

interface CarProduct
{
    public function accelerate(): void;
    public function decelerate(): void;
    public function changeGear(): void;
}