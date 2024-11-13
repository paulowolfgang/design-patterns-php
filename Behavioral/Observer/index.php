<?php

require_once('../../autoloader.php');

$controlStockSubject = new Behavioral\Observer\StockControlSubject();

$purchaseRequisitionControlObserver = new Behavioral\Observer\PurchaseRequisitionControl();
$emailObserver = new Behavioral\Observer\EmailObserver();

$controlStockSubject->addObserver($purchaseRequisitionControlObserver);
$controlStockSubject->addObserver($emailObserver);

$controlStockSubject->notifyObservers(123);
