<?php

namespace State;


use OrderStateInterface;
use State\StateContract\OrderContext;


require_once __DIR__ . '/StateContract/OrderContext.php';
require_once __DIR__ . '/StateContract/OrderStateInterface.php';
require_once __DIR__ . '/ProcessingState.php';

class PendingState implements OrderStateInterface
{

    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new ProcessingState());
    }

    public function toString(): string
    {
        return 'pending';
    }
}