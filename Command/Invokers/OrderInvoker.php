<?php
namespace Invokers;

require_once __DIR__ . '/../Commands/OrderCommandInterface.php';

use Commands\OrderCommandInterface;

readonly class OrderInvoker
{


    public function __construct(
        private OrderCommandInterface $orderCommand
    ) {
    }

    public function execute(): void
    {
        $this->orderCommand->execute();
    }


}