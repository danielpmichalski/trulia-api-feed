<?php
include_once('Enum.php');

class FoundationType extends Enum {
    const CONCRETE = 1;
    const CONCRETE_BLOCK = 2;
    const RAISED = 3;
    const CROSSED_WALLS = 4;
    const EARTH = 5;
    const FOOTING = 6;
    const OTHER = 7;
    const PIERS = 8;
    const PILING = 9;
    const SLAB = 10;
    const STONE = 11;
    const WOOD = 12;

    protected $values = array(
        self::CONCRETE => 'Concrete',
        self::CONCRETE_BLOCK => 'Concrete Block',
        self::RAISED => 'Raised',
        self::CROSSED_WALLS => 'Crossed Walls',
        self::EARTH => 'Earth',
        self::FOOTING => 'Footing',
        self::OTHER => 'Other',
        self::PIERS => 'Piers',
        self::PILING => 'Piling',
        self::SLAB => 'Slab',
        self::STONE => 'Stone',
        self::WOOD => 'Wood'
    );
}