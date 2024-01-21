<?php


use Composite\Product;
use Composite\ProductCategory;

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/ProductCategory.php';

$product1 = new Product('Test Product', 100);
$product2 = new Product('Test Product 2', 200);

$product3 = new Product('Test Product 3', 300);

$products = new  ProductCategory('Test Category');
$products->add($product1);
$products->add($product2);

$products2 = new  ProductCategory('Test Category 2');
$products2->add($product3);
$products2->add($products);

echo $products2->getPrice();

