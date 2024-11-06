<?php

require_once('../../autoloader.php');

$legacyIntegration = new \Structural\Adapter\IntegrationErp();
$integrationErpAdapter = new \Structural\Adapter\IntegrationErpAdapter($legacyIntegration);

$token = $integrationErpAdapter->generateToken('123456', 'PAULO_SILVA');

$orderTest = new \Structural\Adapter\Order();
$orderTest->setValueOrder(3500.00)
    ->setNumberOrder(123456)
    ->addProduct('I Phone X')
    ->addProduct('Carregador sem fio - I Phone X');

$tokenTest = 'XYZ123456ABC';

$orderSentSuccessfully = $integrationErpAdapter->sendOrder($orderTest, $token);

if ($orderSentSuccessfully)
{
    echo 'Pedido enviado com sucesso.';
}
