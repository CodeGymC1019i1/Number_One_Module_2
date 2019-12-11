<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
//var_dump($productManager);
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() ."<br/>";
}