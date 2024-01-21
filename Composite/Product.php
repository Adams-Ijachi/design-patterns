<?php

namespace Composite;

use ProductComponentInterface;

require_once __DIR__ . '/Component/ProductComponentInterface.php';

readonly class Product implements ProductComponentInterface
{

        public function __construct(private string $name, private float $price)
        {
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function getPrice(): float
        {
            return $this->price;
        }

}