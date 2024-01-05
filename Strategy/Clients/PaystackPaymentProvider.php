<?php
namespace StrategyPattern\Clients;

use StrategyPattern\Behaviours\PayWithCard;
use StrategyPattern\PaymentProvider;

require_once __DIR__.'/../Behaviours/PayWithCard.php';
require_once __DIR__.'/../PaymentProvider.php';

class PaystackPaymentProvider extends PaymentProvider
{
    public function __construct()
    {
        $this->payBehaviour = new PayWithCard();
    }
}
