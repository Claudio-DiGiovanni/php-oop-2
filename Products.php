<?php
abstract class Products
{
    public $name;
    protected $price;
    private $disponibility;
    private $quantity;
    private $sales = 0;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;

        if ($quantity > 0) {
            $this->disponibility = true;
        } else {
            $this->disponibility = false;
        }
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}