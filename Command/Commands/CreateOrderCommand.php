<?php

namespace Commands;

require_once __DIR__ . '/../Commands/OrderCommandInterface.php';

require_once __DIR__ . '/../OrderService.php';

use OrderService;

class CreateOrderCommand implements OrderCommandInterface
{
    private array $orderData;

    private OrderService $order;
    public function __construct(array $orderData, OrderService $order)
    {
        $this->order = $order;
        $this->orderData = $orderData;
    }

    public function execute(): void
    {
        $this->order->create(
            $this->orderData
        );
    }

}