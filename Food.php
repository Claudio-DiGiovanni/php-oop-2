<?php
class Food extends Products 
{
    public $animal;
    public $expiry;

    public function __construct($animal, $expiry)
    {
        $this->animal = $animal;
        $this->expiry = $expiry;
    }
}