<?php
include_once('Enum.php');

class ExteriorType extends Enum {
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

    protected $values = array(
        self::ADOBE => 'Adobe',
        self::ASBESTOS_SHINGLE => 'Asbestos Shingle',
        self::BRICK => 'Brick',
        self::BRICK_VENEER => 'Brick Veneer',
        self::BLOCK => 'Block',
        self::CONCRETE => 'Concrete',
        self::CONCRETE_BLOCK => 'Concrete Block',
        self::GLASS => 'Glass',
        self::LOG => 'Log',
        self::MARBLE => 'Marble',
        self::MASONRY => 'Masonry',
        self::METAL => 'Metal',
        self::OTHER => 'Other',
        self::ROCK_STONE => 'Rock/Stone',
        self::STUCCO => 'Stucco',
        self::TILE => 'Tile',
        self::WOOD => 'Wood'
    );
}