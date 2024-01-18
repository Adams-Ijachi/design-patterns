<?php

namespace TemplateMethodPattern;

require_once __DIR__ . '/OrderTemplateProcess.php';

class PayOnDeliveryOrder extends OrderTemplateProcess
{


    protected function doPayment(): void
    {
        echo "Payment will be done on delivery \n";
    }

    protected function doDelivery(): void
    {
        echo "Order will be delivered to you\n";
    }
}