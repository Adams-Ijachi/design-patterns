<?php

namespace Commands;

use OrderService;

class CancelOrderCommand implements OrderCommandInterface
{

    private OrderService $orderService;

    private int $order_id;

    public function __construct(int $order_id,OrderService $order)
    {
        $this->orderService = $order;
        $this->order_id = $order_id;
    }

    public function execute(): void
    {
        $this->orderService->cancel($this->order_id);
    }
}