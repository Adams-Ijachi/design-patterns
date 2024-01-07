<?php

namespace Decorator\Modes;

interface TransportModeInterface
{
    public function calculatePrice(): int;

    public function getDescription(): string;

}