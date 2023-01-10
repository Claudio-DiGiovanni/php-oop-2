<?php
class Games extends Products 
{
    public $animal;
    public $color;

    public function __construct($animal, $color)
    {
        $this->animal = $animal;
        $this->color = $color;
    }
}