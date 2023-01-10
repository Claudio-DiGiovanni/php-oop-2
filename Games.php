<?php
include_once __DIR__ . '/Products.php';
class Games extends Products 
{
    public $animal;
    public $color;

    public function __construct($animal, $color, $name, $price, $quantity)
    {
        parent::__construct($name, $price, $quantity);
        $this->animal = $animal;
        $this->color = $color;
    }
}