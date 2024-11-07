<?php

use Structural\Facade\LibraryFacade;

require_once('../../autoloader.php');

$libraryFacade = new \Structural\Facade\LibraryFacade();

$bookCode = '123456';
$customerCpf = '12345678900';

try {
    $madeWithdrawal = $libraryFacade->makeWithdrawal($bookCode, $customerCpf);
} catch (Exception $e) {
    echo $e->getMessage();
}

if($madeWithdrawal)
{
    $libraryFacade->sendMessages($bookCode, $customerCpf, 'API_KEY', 'API_PASS');
}
