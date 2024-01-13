<?php


use Adapter\Adapters\PaypalAdapter;
use Adapter\Adapters\StripeAdapter;
use Adapter\Services\PaypalService;
use Adapter\Services\StripeService;

require_once __DIR__ . '/Adapters/PaypalAdapter.php';
require_once __DIR__ . '/Services/PaypalService.php';
require_once __DIR__ . '/Adapters/StripeAdapter.php';
require_once __DIR__ . '/Services/StripeService.php';

$paypalAdapter = new PaypalAdapter(new PaypalService());

$paypalAdapter->pay();

$stripeAdapter = new StripeAdapter(new StripeService());
$stripeAdapter->pay();




