<?php

namespace Decorator\Decorators;

use Decorator\Modes\TransportModeInterface;

require_once __DIR__ . '/../Modes/TransportModeInterface.php';

abstract class TransportDecorator implements TransportModeInterface
{

        protected TransportModeInterface $transportMode;

        public function __construct(TransportModeInterface $transportMode)
        {
            $this->transportMode = $transportMode;
        }

        public function calculatePrice(): int
        {
            return $this->transportMode->calculatePrice();
        }

        public function getDescription(): string
        {
            return $this->transportMode->getDescription();
        }

}