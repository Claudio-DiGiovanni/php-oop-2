<?php
class Pesticide extends Products
{
    private $animal;
    private $weight;
    private $type;

     public function __construct($animal, $weight, $type)
    {
        $this->animal = $animal;
        $this->weight = $weight;
        $this->type = $type;
    }
}