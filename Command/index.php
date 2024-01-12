<?php


require_once "Invokers/OrderInvoker.php";
require_once "Commands/CreateOrderCommand.php";
require_once "Commands/CancelOrderCommand.php";

use Commands\CancelOrderCommand;
use Commands\CreateOrderCommand;
use Invokers\OrderInvoker;


$createOrder = new CreateOrderCommand(
    [
        'product_id' => 1,
        'quantity' => 2,
        'customer_id' => 1
    ],
    new OrderService()
);

$orderButton = new OrderInvoker(
    $createOrder
);
$orderButton->execute();

$canceledOrder = new CancelOrderCommand(
    1,
    new OrderService()
);

$orderButton = new OrderInvoker(
    $canceledOrder
);

$orderButton->execute();

