<?php
include_once __DIR__ . '/Products.php';
class Box extends Products
{
    private $dimension;
    private $color;

    public function __construct($dimension, $color, $name, $price, $quantity)
    {
        parent::__construct($name, $price, $quantity);
        $this->dimension = $dimension;
        $this->color = $color;
    }
}