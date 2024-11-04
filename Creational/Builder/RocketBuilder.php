<?php

namespace Creational\Builder;

abstract class RocketBuilder
{
    protected RocketProduct $rocket;

    public function __construct()
    {
        $this->rocket = new RocketProduct();
    }

    /**
     * @return RocketProduct
     */
    public function getRocket(): RocketProduct
    {
        return $this->rocket;
    }

    abstract public function buildFuelTank(): void;
    abstract public function buildModel(): void;
    abstract public function buildNumberEngines(): void;
    abstract public function buildNumberSeats(): void;
}
