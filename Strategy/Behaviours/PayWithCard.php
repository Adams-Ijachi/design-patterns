<?php

namespace StrategyPattern\Behaviours;

use Strategy\Contracts\PayBehaviourInterface;

require_once __DIR__.'/../Contracts/PayBehaviourInterface.php';
class PayWithCard implements PayBehaviourInterface
{
    public function pay(): void
    {
        echo "Pay with Card";
    }
}