<?php

namespace State\StateContract;

use OrderStateInterface;

interface OrderContext
{

    public function setState(OrderStateInterface $state);

    public function proceedToNext();

    public function toString(): string  ;
}