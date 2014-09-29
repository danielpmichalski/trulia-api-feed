<?php
include_once('Enum.php');

class ParkingType implements Enum {
    const SURFACE_LOT = 1;
    const GARAGE_LOT = 2;
    const COVERED_LOT = 3;
    const STREET = 4;
    const CARPORT = 5;
    const NONE = 6;
    const OTHER = 7;

    private static $values = array(
        ParkingType::SURFACE_LOT => 'surface lot',
        ParkingType::GARAGE_LOT => 'garage lot',
        ParkingType::COVERED_LOT => 'covered lot',
        ParkingType::STREET => 'street',
        ParkingType::CARPORT => 'carport',
        ParkingType::NONE => 'none',
        ParkingType::OTHER => 'other'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return ParkingType::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
} 