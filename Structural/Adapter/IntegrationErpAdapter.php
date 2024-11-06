<?php

namespace Structural\Adapter;

class IntegrationErpAdapter implements IErpAdapter
{
    private IntegrationErp $integrationErp;

    public function __construct(IntegrationErp $integrationErp)
    {
        $this->integrationErp = $integrationErp;
    }

    public function generateToken(string $apiKey, string $user): string
    {
        return $this->integrationErp->token($apiKey);
    }

    public function sendOrder(Order $order, string $token): bool
    {
        $convertedOrderArray = [
            'valueOrder' => $order->getValueOrder(),
            'code'       => $order->getNumberOrder()
        ];

        foreach ($order->getProduct() as $product){
            $convertedProductArray['products'][] = $product;
        }

        return $this->integrationErp->order($convertedOrderArray, $token);
    }
}
