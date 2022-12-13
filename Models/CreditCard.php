<?php
class CreditCard {
    private $number;
    private $cvv;
    private $expirationMonth;
    private $expirationYear;

    function __construct($number, $cvv, $expirationMonth, $expirationYear) {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->expirationMonth = $expirationMonth;
        $this->expirationYear = $expirationYear;
    }

    public function getExpirationYear() {
        return $this->expirationYear;
    }

    public function getExpirationMonth() {
        return $this->expirationMonth;
    }
}
