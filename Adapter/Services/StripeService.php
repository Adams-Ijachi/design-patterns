<?php

namespace Adapter\Services;
class StripeService
{
    public function transferPayment(): void
    {
        echo "Payment has been sent via Stripe";
    }

}