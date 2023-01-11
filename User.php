<?php
class User 
{
    private $name;
    private $creditCard;
    private $sales = 20;

    public function __construct($name, $creditCard)
	{
		$this->name = $name;
		$this->creditCard = $creditCard;
	}

}