<?php

use StrategyPattern\Behaviours\PayWithBitcoin;
use StrategyPattern\Clients\PaystackPaymentProvider;
use StrategyPattern\Clients\CryptoPaymentProvider;
require_once "Clients/PaystackPaymentProvider.php";
require_once "Clients/CryptoPaymentProvider.php";
require_once "Behaviours/PayWithBitcoin.php";

/**
 * This code demonstrates the use of the Strategy design pattern to perform payments using different payment providers.
 */

$paymentProvider = new PaystackPaymentProvider;

$paymentProvider->setPaymentProvider(new PayWithBitcoin);

$paymentProvider->performPayment();