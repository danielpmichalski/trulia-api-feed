<?php
include_once('Enum.php');

class ExteriorType implements Enum {
    const ADOBE = 1;
    const ASBESTOS_SHINGLE = 2;
    const BRICK = 3;
    const BRICK_VENEER = 4;
    const BLOCK = 5;
    const CONCRETE = 6;
    const CONCRETE_BLOCK = 7;
    const GLASS = 8;
    const LOG = 9;
    const MARBLE = 10;
    const MASONRY = 11;
    const METAL = 12;
    const OTHER = 13;
    const ROCK_STONE = 14;
    const STUCCO = 15;
    const TILE = 16;
    const WOOD = 17;

    private static $values = array(
        ExteriorType::ADOBE => 'Adobe',
        ExteriorType::ASBESTOS_SHINGLE => 'Asbestos Shingle',
        ExteriorType::BRICK => 'Brick',
        ExteriorType::BRICK_VENEER => 'Brick Veneer',
        ExteriorType::BLOCK => 'Block',
        ExteriorType::CONCRETE => 'Concrete',
        ExteriorType::CONCRETE_BLOCK => 'Concrete Block',
        ExteriorType::GLASS => 'Glass',
        ExteriorType::LOG => 'Log',
        ExteriorType::MARBLE => 'Marble',
        ExteriorType::MASONRY => 'Masonry',
        ExteriorType::METAL => 'Metal',
        ExteriorType::OTHER => 'Other',
        ExteriorType::ROCK_STONE => 'Rock/Stone',
        ExteriorType::STUCCO => 'Stucco',
        ExteriorType::TILE => 'Tile',
        ExteriorType::WOOD => 'Wood'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return ExteriorType::$values[$this->value];
    }

    function __toString() {
        return $this->getText();
    }
}