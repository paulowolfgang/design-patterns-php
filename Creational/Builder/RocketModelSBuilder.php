<?php

namespace Creational\Builder;

class RocketModelSBuilder extends RocketBuilder
{
    public function buildFuelTank(): void
    {
        $this->rocket->setFuelTank(850);
    }

    public function buildModel(): void
    {
        $this->rocket->setModel("Foguete modelo S.");
    }

    public function buildNumberEngines(): void
    {
        $this->rocket->setNumberEngines(2);
    }

    public function buildNumberSeats(): void
    {
        $this->rocket->setNumberSeats(6);
    }
}
