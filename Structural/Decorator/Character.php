<?php

namespace Structural\Decorator;

abstract class Character
{
    protected float $attack;
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function getAttack(): float
    {
        return $this->attack;
    }
}
