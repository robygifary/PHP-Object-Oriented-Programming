<?php

require_once "data/Product.php";

$product = new Product("Melon", 50000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 5000);
$dummy->info();