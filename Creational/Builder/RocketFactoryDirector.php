<?php

namespace Creational\Builder;

class RocketFactoryDirector
{
    protected RocketBuilder $rocketBuilder;

    public function __construct(RocketBuilder $rocketBuilder)
    {
        $this->rocketBuilder = $rocketBuilder;
    }

    /**
     * @return RocketProduct
     */
    public function getRocket(): RocketProduct
    {
        return $this->rocketBuilder->getRocket();
    }

    public function buildRockets(): void
    {
        $this->rocketBuilder->buildModel();
        $this->rocketBuilder->buildFuelTank();
        $this->rocketBuilder->buildNumberEngines();
        $this->rocketBuilder->buildNumberSeats();
    }
}
