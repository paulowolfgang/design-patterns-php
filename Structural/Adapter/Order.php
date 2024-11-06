<?php

namespace Structural\Adapter;

class Order
{
    protected string $numberOrder;
    protected float $valueOrder;
    protected array $product;

    /**
     * @return int
     */
    public function getNumberOrder(): int
    {
        return $this->numberOrder;
    }

    /**
     * @param int $numberOrder
     * @return Order
     */
    public function setNumberOrder(int $numberOrder): Order
    {
        $this->numberOrder = $numberOrder;
        return $this;
    }

    /**
     * @return float
     */
    public function getValueOrder(): float
    {
        return $this->valueOrder;
    }

    /**
     * @param float $valueOrder
     * @return Order
     */
    public function setValueOrder(float $valueOrder): Order
    {
        $this->valueOrder = $valueOrder;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProduct(): array
    {
        return $this->product;
    }

    /**
     * @param string[] $product
     * @return Order
     */
    public function setProduct(array $product): Order
    {
        $this->product = $product;
        return $this;
    }

    /**
     *
     * @param string $product
     * @return Order
     */

    public function addProduct(string $product): Order
    {
        $this->product[] = $product;
        return $this;
    }
}
