<?php
use StrategyPattern\Clients\PaystackPaymentProvider;
use StrategyPattern\Clients\CryptoPaymentProvider;
require_once "Clients/PaystackPaymentProvider.php";
require_once "Clients/CryptoPaymentProvider.php";



$paymentProvider = new PaystackPaymentProvider;
$paymentProvider->performPayment();

$paymentProvider = new CryptoPaymentProvider;
$paymentProvider->performPayment();
