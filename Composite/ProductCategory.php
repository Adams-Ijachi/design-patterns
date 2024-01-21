<?php

namespace Composite;

use ProductComponentInterface;
require_once __DIR__ . '/Component/ProductComponentInterface.php';
class ProductCategory implements ProductComponentInterface
{

    private array $products = [];

    public function __construct(private readonly string $name)
    {
    }

    public function add(ProductComponentInterface $product): void
    {
        $this->products[] = $product;
    }

    public function getPrice(): float
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function getName(): string
    {
        return $this->name;
    }
}