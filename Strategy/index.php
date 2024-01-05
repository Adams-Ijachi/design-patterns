<?php
use StrategyPattern\Clients\PaystackPaymentProvider;
use StrategyPattern\Clients\CryptoPaymentProvider;
require_once "Clients/PaystackPaymentProvider.php";
require_once "Clients/CryptoPaymentProvider.php";


/**
 * This code demonstrates the use of the Strategy design pattern to perform payments using different payment providers.
 */

$paymentProvider = new PaystackPaymentProvider;
$paymentProvider->performPayment();

$paymentProvider = new CryptoPaymentProvider;
$paymentProvider->performPayment();
