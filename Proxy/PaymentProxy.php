<?php

namespace Proxy;


use Proxy\Contract\PaymentInterface;

require_once "Contract/PaymentInterface.php";

readonly class PaymentProxy implements PaymentInterface
{

    public function __construct(private PaymentInterface $paymentService)
    {

    }
    public function transfer(): void
    {
        // logic to check if user is admin but for this example we can just add logging
        echo "[Logging] User is trying to transfer money \n";
        $this->paymentService->transfer();
    }

    public function credit(int $amount): void
    {
        // logic to check if user is admin but for this example we can just add logging
        echo "[Logging] User is trying to send $amount \n";
        $this->paymentService->credit($amount);
    }
}