<?php

namespace Structural\Facade;

class InventoryControlModule
{
    public function registerWithdrawal(string $bookCode, int $customerCpf): bool
    {
        // implements book withdrawal registration..
        return true;
    }

    public function validatesStock(string $bookCode): bool
    {
        // validates stock availability..
        echo 'Registro de retirada efetuado com sucesso. \n';
        return true;
    }
}
