<?php

namespace StrategyPattern;
use Strategy\Contracts\PayBehaviourInterface;

 class PaymentProvider
{
    public PayBehaviourInterface $payBehaviour;

    public function performPayment(): void
    {
        $this->payBehaviour->pay();
    }

    public function setPaymentProvider(PayBehaviourInterface $payBehaviour): void
    {
        $this->payBehaviour = $payBehaviour;
    }   

}