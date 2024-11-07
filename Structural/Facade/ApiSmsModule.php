<?php

namespace Structural\Facade;

class ApiSmsModule
{
    public function generateTokenApi(string $apiKey, string $apiPass): string
    {
        // implementation of generating a token..
        return 'TOKEN_API';
    }

    public function sendSms(
        string $tokenApi,
        string $sendersName,
        string $recipientsName,
        string $recipientsTelephone,
        string $message
    ): bool
    {
        // implementing sms sending..
        echo 'SMS enviado com sucesso..';
        return true;
    }
}