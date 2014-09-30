<?php
include_once('Enum.php');

class FirePlaceType extends Enum {
    const GAS = 1;
    const WOOD = 2;
    const ELECTRIC = 3;
    const DECORATIVE = 4;

    protected $values = array(
        self::GAS => 'gas',
        self::WOOD => 'wood',
        self::ELECTRIC => 'electric',
        self::DECORATIVE => 'decorative'
    );
}