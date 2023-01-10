<?php
include_once __DIR__ . '/Products.php';
class Pesticide extends Products
{
    private $animal;
    private $weight;
    private $type;

     public function __construct($animal, $weight, $type, $name, $price, $quantity)
    {
        parent::__construct($name, $price, $quantity);
        $this->animal = $animal;
        $this->weight = $weight;
        $this->type = $type;
    }
}