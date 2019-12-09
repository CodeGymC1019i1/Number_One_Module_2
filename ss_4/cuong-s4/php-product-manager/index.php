<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Models\Product;
use Services\ProductManager;

$productManager = new ProductManager();
$productManager->add(new Product("Iphone"));
$productManager->add(new Product("Android"));

$products = $productManager->getProducts();
foreach($products as $products){
    echo $products->getName()."</br>";
    

}
