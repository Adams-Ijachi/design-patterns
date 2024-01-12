<?php


class OrderService
{

    public function create($orderData): void
    {

        print_r($orderData);

        echo "Order created \n";
    }

    public function cancel($order_id): void
    {
        echo "Order " .$order_id ." cancelled \n";
    }


}