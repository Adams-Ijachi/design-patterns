<?php
 namespace Proxy\Contract;
interface PaymentInterface
{

    public function transfer():void;

    public function credit(int $amount):void;

}