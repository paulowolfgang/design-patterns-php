<?php

namespace Structural\Decorator;

class RingFire extends CharacterDecorator
{
    public function __construct(Character $character)
    {
        parent::__construct($character);
        $this->attack = 3;
    }
}
