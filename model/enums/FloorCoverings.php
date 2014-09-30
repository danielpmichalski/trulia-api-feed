<?php
include_once('Enum.php');

class FloorCoverings extends Enum {
    const CARPET = 1;
    const HARDWOOD = 2;
    const TILE = 3;
    const VINYL = 4;
    const CONCRETE = 5;
    const LINOLEUM = 6;
    const LAMINATE = 7;
    const MARBLE = 8;
    const OTHER = 9;

    protected $values = array(
        self::CARPET => 'Carpet',
        self::HARDWOOD => 'Hardwood',
        self::TILE => 'Tile',
        self::VINYL => 'Vinyl',
        self::CONCRETE => 'Concrete',
        self::LINOLEUM => 'Linoleum',
        self::LAMINATE => 'Laminate',
        self::MARBLE => 'Marble',
        self::OTHER => 'Other'
    );
}