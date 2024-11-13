<?php

namespace Behavioral\Observer;

class PurchaseRequisitionControl implements Observer
{
    public function updating(string $code): void
    {
        $this->purchaseRequisitionList($code);
    }

    public function purchaseRequisitionList(string $productCode): void
    {
        echo "Produto: {$productCode} adicionado a lista de requisições de compras.";
    }
}