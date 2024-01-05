<?php

namespace StrategyPattern\Clients;

use StrategyPattern\Behaviours\PayWithBitcoin;
use StrategyPattern\PaymentProvider;

require_once __DIR__.'/../Behaviours/PayWithBitcoin.php';
require_once __DIR__.'/../PaymentProvider.php';

class CryptoPaymentProvider extends PaymentProvider
{
    public function __construct()
    {
        $this->payBehaviour = new PayWithBitcoin();
    }

}
