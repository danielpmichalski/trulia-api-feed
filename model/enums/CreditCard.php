<?php
include_once('Enum.php');

class CreditCard implements Enum {
    const VISA = 1;
    const MASTERCARD = 2;
    const DISCOVER = 3;
    const AMERICAN_EXPRESS = 4;
    const OTHER = 5;

    private static $values = array(
        CreditCard::VISA => 'visa',
        CreditCard::MASTERCARD => 'mastercard',
        CreditCard::DISCOVER => 'discover',
        CreditCard::AMERICAN_EXPRESS => 'american express',
        CreditCard::OTHER => 'other',
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return CreditCard::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
}