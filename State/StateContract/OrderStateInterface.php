<?php

use State\StateContract\OrderContext;

interface OrderStateInterface
{
    public function proceedToNext(OrderContext $context);
    public function toString() : string;

}