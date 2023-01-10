<?php
include_once __DIR__ . '/Products.php';
class Food extends Products 
{
    public $animal;
    public $expiry;

    public function __construct($animal, $expiry, $name, $price, $quantity)
    {
        parent::__construct($name, $price, $quantity);
        $this->animal = $animal;
        $this->expiry = $expiry;
    }
}