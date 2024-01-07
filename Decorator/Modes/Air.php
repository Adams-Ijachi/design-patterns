<?php

namespace Decorator\Modes;
require_once 'TransportModeInterface.php';
class Air implements TransportModeInterface
{

    public function calculatePrice(): int
    {
        return 100;
    }

    public function getDescription(): string
    {
        return "Air";
    }
}