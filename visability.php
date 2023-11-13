<?php

require_once "data/Product.php";

$product = new Product("Apple", 20000);

// tampilkan product get name
// tampilkan product get price

$Iphone = new ProductDummy("Iphone 15promax", 3400000);
$Iphone->info();
