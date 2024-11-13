<?php

namespace Behavioral\Observer;

class EmailObserver implements Observer
{
    public function updating(string $code): void
    {
        $this->sendEmailZeroStock($code);
    }

    public function sendEmailZeroStock(string $productCode): void
    {
        echo 'E-mail enviado com sucesso!';
    }
}
