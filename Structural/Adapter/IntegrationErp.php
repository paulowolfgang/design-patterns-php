<?php

namespace Structural\Adapter;

class IntegrationErp
{
    public function token($apiKey): string
    {
        // other implementations..

        return 'TOKEN_GENERATED_VIA_API';
    }

    public function order($order, $apiKey): bool
    {
        // order shipping implementation..

        return true;
    }
}
