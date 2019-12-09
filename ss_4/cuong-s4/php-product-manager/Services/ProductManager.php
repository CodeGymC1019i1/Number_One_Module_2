<?php
namespace Services;
class ProductManager
{
    private $Products;
    public function __construct()
    {
        $this->Products = [];
    }
    public function add($product)
    {
        $this->Products[] = $product;
    }
    public function getProducts()
    {
        return $this->Products;
    }
}
?>