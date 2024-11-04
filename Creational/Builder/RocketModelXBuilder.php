<?php

namespace Creational\Builder;

class RocketModelXBuilder extends RocketBuilder
{
    public function buildFuelTank(): void
    {
        $this->rocket->setFuelTank(1000);
    }

    public function buildModel(): void
    {
        $this->rocket->setModel("Foguete modelo X.");
    }

    public function buildNumberEngines(): void
    {
        $this->rocket->setNumberEngines(3);
    }

    public function buildNumberSeats(): void
    {
        $this->rocket->setNumberSeats(8);
    }
}
