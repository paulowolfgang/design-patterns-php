<?php

namespace Structural\Facade;

use \Structural\Facade\{
    InventoryControlModule,
    CustomerControlModule,
    EmailModule,
    ApiSmsModule
};

class LibraryFacade
{
    public function makeWithdrawal(string $bookCode, string $customerCpf): bool
    {
        $inventoryControlModule = new InventoryControlModule();
        if (!$inventoryControlModule->validatesStock($bookCode))
        {
            throw new \Exception("Livro: " . $bookCode . ", indisponível.");
        }

        return $inventoryControlModule->registerWithdrawal($bookCode, $customerCpf);
    }

    public function sendMessages(
        string $bookCode,
        string $customerCpf,
        string $apiKey,
        string $apiPass
    ): bool
    {
        $smsModule = new ApiSmsModule();
        $customerControlModule = new CustomerControlModule();
        $emailModule = new EmailModule();

        $customer = $customerControlModule->findCustomer($customerCpf);

        if ($emailModule->validateEmailServer())
        {
            $emailModule->sendMessage(
                'Rafael Moraes',
                'Paulo Silva',
                'paulo@silva.com.br',
                'Aluguel',
                'Aluguel do livro efetuado com sucesso.'
            );
        }

        $token = $smsModule->generateTokenApi($apiKey, $apiPass);

        $smsModule->sendSms(
            $token,
            'Biblioteca XYZ',
            $customer['name'],
            $customer['telephone'],
            "Aluguel do livro de código: '{$bookCode}', efetuado com sucesso."
        );

        return true;
    }
}
