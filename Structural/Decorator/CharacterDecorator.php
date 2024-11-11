<?php

namespace Structural\Decorator;

abstract class CharacterDecorator extends Character
{
    /** @var Character $character */
    protected $character;
    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    public function getName(): string
    {
        return $this->character->getName();
    }

    public function getAttack(): float
    {
        return $this->character->getAttack() + $this->attack;
    }
}
