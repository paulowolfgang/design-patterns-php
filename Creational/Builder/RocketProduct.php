<?php

namespace Creational\Builder;

class RocketProduct
{
    protected float $fuelTank;
    protected string $model;
    protected int $numberEngines;
    protected int $numberSeats;

    public function __toString(): string
    {
        $result = "Foguete modelo: {$this->getModel()}\n";
        $result .= "Litros do tanque: {$this->getFuelTank()}\n";
        $result .= "Número de motores: {$this->getNumberEngines()}\n";
        $result .= "Número de lugares: {$this->getNumberSeats()}\n";

        return $result;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return RocketProduct
     */
    public function setModel(string $model): RocketProduct
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return float
     */
    public function getFuelTank(): float
    {
        return $this->fuelTank;
    }

    /**
     * @param float $fuelTank
     * @return RocketProduct
     */
    public function setFuelTank(float $fuelTank): RocketProduct
    {
        $this->fuelTank = $fuelTank;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberEngines(): int
    {
        return $this->numberEngines;
    }

    /**
     * @param int $numberEngines
     * @return RocketProduct
     */
    public function setNumberEngines(int $numberEngines): RocketProduct
    {
        $this->numberEngines = $numberEngines;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberSeats(): int
    {
        return $this->numberSeats;
    }

    /**
     * @param int $numberSeats
     * @return RocketProduct
     */
    public function setNumberSeats(int $numberSeats): RocketProduct
    {
        $this->numberSeats = $numberSeats;
        return $this;
    }
}
