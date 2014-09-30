<?php
include_once('Enum.php');

class ParkingType extends Enum {
    const SURFACE_LOT = 1;
    const GARAGE_LOT = 2;
    const COVERED_LOT = 3;
    const STREET = 4;
    const CARPORT = 5;
    const NONE = 6;
    const OTHER = 7;

    protected $values = array(
        self::SURFACE_LOT => 'surface lot',
        self::GARAGE_LOT => 'garage lot',
        self::COVERED_LOT => 'covered lot',
        self::STREET => 'street',
        self::CARPORT => 'carport',
        self::NONE => 'none',
        self::OTHER => 'other'
    );
} 