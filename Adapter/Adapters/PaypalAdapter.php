<?php
namespace Adapter\Adapters;
use Adapter\PaymentAdapterInterface;
use Adapter\Services\PaypalService;

require_once __DIR__ . '/../PaymentAdapterInterface.php';
require_once __DIR__ . '/../Services/PaypalService.php';

readonly class PaypalAdapter implements PaymentAdapterInterface
{

    public function __construct( private PaypalService $paypalService)
    {

    }

    public function pay(): void
    {
        $this->paypalService->sendPayment();
    }
}