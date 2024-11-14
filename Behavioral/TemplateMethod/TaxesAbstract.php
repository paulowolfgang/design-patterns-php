<?php

namespace Behavioral\TemplateMethod;

abstract class TaxesAbstract
{
    private function calculatesFirstFlatTax(float $productPrice): float
    {
        return ($productPrice * 1.3);
    }

    private function calculatesSecondFlatTax(float $productPrice): float
    {
        return ($productPrice * 1.1);
    }

    abstract protected function calculatesVariableTax(float $productPrice): float;

    protected function calculateAdditionalTax(float $productPrice): float
    {
        return $productPrice;
    }

    public function calculatesProductTax(float $productPrice): float
    {
        $productPrice = $this->calculatesFirstFlatTax($productPrice);
        $productPrice = $this->calculatesSecondFlatTax($productPrice);
        $productPrice = $this->calculatesVariableTax($productPrice);
        return $this->calculateAdditionalTax($productPrice);
    }
}
