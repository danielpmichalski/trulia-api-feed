<?php
include_once('Enum.php');

class FloorCoverings implements Enum {
    const CARPET = 1;
    const HARDWOOD = 2;
    const TILE = 3;
    const VINYL = 4;
    const CONCRETE = 5;
    const LINOLEUM = 6;
    const LAMINATE = 7;
    const MARBLE = 8;
    const OTHER = 9;

    private static $values = array(
        FloorCoverings::CARPET => 'Carpet',
        FloorCoverings::HARDWOOD => 'Hardwood',
        FloorCoverings::TILE => 'Tile',
        FloorCoverings::VINYL => 'Vinyl',
        FloorCoverings::CONCRETE => 'Concrete',
        FloorCoverings::LINOLEUM => 'Linoleum',
        FloorCoverings::LAMINATE => 'Laminate',
        FloorCoverings::MARBLE => 'Marble',
        FloorCoverings::OTHER => 'Other'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return FloorCoverings::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
}