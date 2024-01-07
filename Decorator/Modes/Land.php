<?php

namespace Decorator\Modes;

require_once 'TransportModeInterface.php';

class Land implements TransportModeInterface
{

        public function calculatePrice(): int
        {
            return 50;
        }

        public function getDescription(): string
        {
            return "Land";
        }

}