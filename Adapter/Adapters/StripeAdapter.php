<?php
namespace Adapter\Adapters;
use Adapter\PaymentAdapterInterface;
use Adapter\Services\StripeService;


require_once __DIR__ . '/../PaymentAdapterInterface.php';
require_once __DIR__ . '/../Services/PaypalService.php';

readonly class StripeAdapter  implements  PaymentAdapterInterface
{
    public function __construct(private StripeService $stripeService)
    {
    }

    public function pay(): void
    {
        $this->stripeService->transferPayment();
    }
}