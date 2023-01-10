<?php
class CreditCard
{
	private $number;
	private $cvc;
	private $expiry;
    private $expenditure = 0;

	public function __construct($number, $cvc, $expiry)
	{
		$this->number = $number;
		$this->cvc = $cvc;
		$this->expiry = $expiry;
	}

	public function checkValidity()
	{
		if ($this->expiry < date("m.y")) {
            return true;
        } else {
            return false;
        }
	}

	public function checkNumber() 
    {
		if (strlen($this->number) === 16 && is_numeric($this->number)) {
            return true;
        } else {
            return false;
        }
	}

	public function checkCvc() {
		if (strlen($this->cvc) === 16 && is_numeric($this->cvc)) {
            return true;
        } else {
            return false;
        }
	}

	public function pay($amount) {
		$this->expenditure = $this->expenditure + $amount;
	}
}