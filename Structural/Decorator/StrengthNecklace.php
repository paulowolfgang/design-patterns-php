<?php

namespace Structural\Decorator;

class StrengthNecklace extends CharacterDecorator
{
    public function __construct(Character $character)
    {
        parent::__construct($character);
        $this->attack = 2;
    }
}
