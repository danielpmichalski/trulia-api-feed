<?php
include_once('Enum.php');

class ListingType implements Enum {
    const RESALE = 1;
    const FORECLOSURE = 2;
    const NEW_HOME = 3;
    const RENTAL = 4;

    private static $values = array(
        ListingType::RESALE => 'resale',
        ListingType::FORECLOSURE => 'foreclosure',
        ListingType::NEW_HOME => 'new home',
        ListingType::RENTAL => 'rental',
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return ListingType::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
}