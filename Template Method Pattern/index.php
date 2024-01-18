<?php


use TemplateMethodPattern\PayOnDeliveryOrder;
use TemplateMethodPattern\PaypalOrder;

require_once __DIR__ . '/PayOnDeliveryOrder.php';
require_once __DIR__ . '/PaypalOrder.php';


$order = new PayOnDeliveryOrder();
$order->processOrder();

$order = new PaypalOrder();
$order->processOrder();