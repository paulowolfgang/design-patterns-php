<?php

namespace Structural\Decorator;

class Knight extends Character
{
    public function __construct()
    {
        $this->name = "Cavaleiro";
        $this->attack = 13;
    }
}
