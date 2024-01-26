<?php

namespace State;

use OrderStateInterface;
use State\StateContract\OrderContext;

require_once __DIR__ . '/StateContract/OrderContext.php';
require_once __DIR__ . '/StateContract/OrderStateInterface.php';
require_once __DIR__ . '/ShippingState.php';

class ProcessingState implements OrderStateInterface
{

    public function proceedToNext(OrderContext $context): void
    {
        echo "Processing the order" . PHP_EOL;
        $context->setState(new ShippingState());
    }

    public function toString(): string
    {
        return 'processing';
    }
}