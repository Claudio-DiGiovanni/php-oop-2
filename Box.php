<?php
class Box extends Products
{
    private $dimension;
    private $color;

    public function __construct($dimension, $color)
    {
        $this->dimension = $dimension;
        $this->color = $color;
    }
}