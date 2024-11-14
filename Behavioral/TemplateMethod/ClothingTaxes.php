<?php

namespace Behavioral\TemplateMethod;

class ClothingTaxes extends TaxesAbstract
{
    protected function calculatesVariableTax(float $productPrice): float
    {
        return ($productPrice * 1.15);
    }
}
