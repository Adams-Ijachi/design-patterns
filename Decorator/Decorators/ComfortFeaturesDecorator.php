<?php

namespace Decorator\Decorators;

require_once 'TransportDecorator.php';

class ComfortFeaturesDecorator extends TransportDecorator
{

    public function calculatePrice(): int
    {
        return $this->transportMode->calculatePrice() + 10;
    }

    public function getDescription(): string
    {
        return $this->transportMode->getDescription() . ' with comfort features';
    }
}