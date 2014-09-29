<?php
include_once('Enum.php');

class PriceTerm implements Enum {
    const NIGHT = 1;
    const WEEK = 2;
    const MONTH = 3;
    const YEAR = 4;

    private static $values = array(
        PriceTerm::NIGHT => 'Night',
        PriceTerm::WEEK => 'Week',
        PriceTerm::MONTH => 'Month',
        PriceTerm::YEAR => 'Year'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return PriceTerm::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
} 