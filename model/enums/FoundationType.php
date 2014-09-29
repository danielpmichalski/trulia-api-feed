<?php
include_once('Enum.php');

class FoundationType implements Enum {
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

    private static $values = array(
        FoundationType::CONCRETE => 'Concrete',
        FoundationType::CONCRETE_BLOCK => 'Concrete Block',
        FoundationType::RAISED => 'Raised',
        FoundationType::CROSSED_WALLS => 'Crossed Walls',
        FoundationType::EARTH => 'Earth',
        FoundationType::FOOTING => 'Footing',
        FoundationType::OTHER => 'Other',
        FoundationType::PIERS => 'Piers',
        FoundationType::PILING => 'Piling',
        FoundationType::SLAB => 'Slab',
        FoundationType::STONE => 'Stone',
        FoundationType::WOOD => 'Wood'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return FoundationType::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
} 