<?php

namespace TemplateMethodPattern;
require_once __DIR__ . '/OrderTemplateProcess.php';
class PaypalOrder extends OrderTemplateProcess
{

    protected function doPayment(): void
    {
        echo "Payment will be done through Paypal \n";
    }

    protected function doDelivery(): void
    {
        echo "Order will be shipped out\n";
    }
}