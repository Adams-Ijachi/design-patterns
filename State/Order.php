<?php

namespace State;

use OrderStateInterface;
use State\StateContract\OrderContext;

require_once __DIR__ . '/StateContract/OrderContext.php';
require_once __DIR__ . '/StateContract/OrderStateInterface.php';
require_once __DIR__ . '/PendingState.php';

class Order implements OrderContext
{
    private OrderStateInterface $state;

    public function __construct()
    {
        $this->state = new PendingState();
    }

    public function setState(OrderStateInterface $state): void
    {
        $this->state = $state;
    }

    public function proceedToNext(): void
    {
        $this->state->proceedToNext($this);
    }

    public function toString(): string
    {
        return $this->state->toString();
    }
}