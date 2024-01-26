<?php


use State\Order;

require_once "Order.php";

$order = new Order();

echo $order->toString() . PHP_EOL;

$order->proceedToNext();

echo $order->toString() . PHP_EOL;

$order->proceedToNext();

echo $order->toString() . PHP_EOL;