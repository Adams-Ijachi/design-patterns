<?php

namespace Services;

use Proxy\Contract\PaymentInterface;

require_once __DIR__ . '/../Contract/PaymentInterface.php';

class PaymentService implements PaymentInterface
{

    public function transfer(): void
    {
        echo "Payment has been sent to user \n";
    }

    public function credit(int $amount): void
    {
        echo "Amount of $amount has been credited to user \n";
    }
}