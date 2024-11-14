<?php

namespace Behavioral\TemplateMethod;

class ElectronicsTaxes extends TaxesAbstract
{
    protected function calculatesVariableTax(float $productPrice): float
    {
        return $productPrice = ($productPrice * 1.2);
    }

    protected function calculateAdditionalTax(float $productPrice): float
    {
        return $productPrice - ($productPrice * 0.1);
    }
}
