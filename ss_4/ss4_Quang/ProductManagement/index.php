<?php
include_once "Model/Product.php";
include_once "services/productManagement.php";
use services\productManagement;
use Model\Product;

$productManagement=new \services\productManagement();
$productManagement->add(new \Model\Product("Laptop",1000));
$productManagement->add(new \Model\Product('Máy tính',100));
$products= $productManagement->getProducts();
foreach ($products as $product){
    echo $product->getName().' ';
    echo $product->getPrice().'</br>';
}