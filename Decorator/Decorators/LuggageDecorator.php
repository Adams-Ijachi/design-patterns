<?php

namespace Decorator\Decorators;

require_once 'TransportDecorator.php';

class LuggageDecorator extends TransportDecorator
{
    public function calculatePrice(): int
    {
        return $this->transportMode->calculatePrice() + 5;
    }

    public function getDescription(): string
    {
        return $this->transportMode->getDescription() . ' with luggage space';
    }
}