<?php

namespace Structural\Facade;

class CustomerControlModule
{
    public function findCustomer(string $cpfCustomer): array
    {
        // implements customer search by CPF..
        return [
            'name' => 'paulo Silva',
            'telephone' => '(xx) x.xxxx-xxxx',
            'email' => 'paulo@silva.com.br',
        ];
    }
}
