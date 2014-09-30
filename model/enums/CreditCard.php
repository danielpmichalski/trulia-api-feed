<?php
include_once('Enum.php');

class CreditCard extends Enum {
    const VISA = 1;
    const MASTERCARD = 2;
    const DISCOVER = 3;
    const AMERICAN_EXPRESS = 4;
    const OTHER = 5;

    protected $values = array(
        self::VISA => 'visa',
        self::MASTERCARD => 'mastercard',
        self::DISCOVER => 'discover',
        self::AMERICAN_EXPRESS => 'american express',
        self::OTHER => 'other',
    );
}