<?php


use Proxy\PaymentProxy;
use Services\PaymentService;

require_once __DIR__ . '/Services/PaymentService.php';
require_once __DIR__ . '/PaymentProxy.php';

$realPayment = new PaymentService();

$realPayment->credit(200); // this is fine but assuming you want to add logging or some other logic to this method

$proxyPayment = new PaymentProxy($realPayment);

$proxyPayment->credit(200);


