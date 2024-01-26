<?php

namespace State;

use OrderStateInterface;
use State\StateContract\OrderContext;


require_once __DIR__ . '/StateContract/OrderContext.php';
require_once __DIR__ . '/StateContract/OrderStateInterface.php';
require_once __DIR__ . '/ProcessingState.php';

class ShippingState implements OrderStateInterface
{

    public function proceedToNext(OrderContext $context): void
    {
        echo "Shipping the order" . PHP_EOL;
    }

    public function toString(): string
    {
        return 'shipping';
    }
}