<?php


class ProductManager
{
    private $product;

    public function __construct()
    {
        $this->product = [];
    }

    public function add($product)
    {
        $this->product[] = $product;
    }

    /**
     * @return array
     */
    public function getProduct()
    {
        return $this->product;
    }
}