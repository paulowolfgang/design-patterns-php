<?php

namespace Behavioral\TemplateMethod;

class FoodTaxes extends TaxesAbstract
{
    protected function calculatesVariableTax(float $productPrice): float
    {
        return $productPrice;
    }
}
