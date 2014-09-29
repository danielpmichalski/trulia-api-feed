<?php
include_once('Enum.php');

class ParkingSpaceFee implements Enum {
    const FREE = 1;
    const PAID = 2;
    const BOTH = 3;

    private static $values = array(
        ParkingSpaceFee::FREE => 'free',
        ParkingSpaceFee::PAID => 'paid',
        ParkingSpaceFee::BOTH => 'both'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return ParkingSpaceFee::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
}