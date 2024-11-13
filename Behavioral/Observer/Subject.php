<?php

namespace Behavioral\Observer;

interface Subject
{
    public function addObserver(Observer $observer): void;
    public function updateStockProduct(string $productCode, int $newQuantity): void;
    public function removeObserver(Observer $observer): void;
    public function notifyObservers(string $productCode): void;
}
