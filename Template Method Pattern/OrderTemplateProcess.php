<?php

namespace TemplateMethodPattern;


abstract  class OrderTemplateProcess
{


    public function processOrder(): void
    {
        $this->createOrder();
        $this->doPayment();
        $this->doDelivery();
    }

    private function createOrder(): void
    {
        echo "Successfully created order \n";
    }

    abstract protected function doPayment(): void;

    abstract protected function doDelivery(): void;
}