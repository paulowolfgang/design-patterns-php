<?php

namespace Structural\Decorator;

class Wizard extends Character
{
    public function __construct()
    {
        $this->name = "Mago";
        $this->attack = 10;
    }
}
