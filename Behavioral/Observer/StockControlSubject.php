<?php

namespace Behavioral\Observer;

/**
 * Class StockControlSubject
 *
 * @package Observer
 */
class StockControlSubject implements Subject
{
    /** @var Observer[] $observers */
    private array $observers;

    /**
     * @param string $productCode
     * @param int $newQuantity
     *
     * @return void
     */
    public function updateStockProduct(string $productCode, int $newQuantity): void
    {
        // simulates the stock update of a product..
        if($newQuantity == 0)
        {
            $this->notifyObservers($productCode);
        }
    }

    /**
     * @param Observer $observer
     *
     * @return void
     */
    public function addObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * @param Observer $removeObserver
     *
     * @return void
     */
    public function removeObserver(Observer $removeObserver): void
    {
        foreach ($this->observers as $index => $observer) {
            if ($observer === $removeObserver) {
                unset($this->observers[$index]);
            }
        }
    }

    /**
     * @param string $productCode
     *
     * @return void
     */
    public function notifyObservers(string $productCode): void
    {
        foreach ($this->observers as $observer)
        {
            $observer->updating($productCode);
        }
    }
}
