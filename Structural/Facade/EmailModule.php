<?php

namespace Structural\Facade;

class EmailModule
{
    public function validateEmailServer(): bool
    {
        // implementation of email server operation..
        return true;
    }

    public function sendMessage(
        string $sendersName,
        string $recipientsName,
        string $emailAddress,
        string $subject,
        string $message
    ): bool
    {
        // implementing email sending..
        echo 'E-mail enviado com sucesso..';
        return true;
    }
}