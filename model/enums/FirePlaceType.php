<?php
include_once('Enum.php');

class FirePlaceType implements Enum {
    const GAS = 1;
    const WOOD = 2;
    const ELECTRIC = 3;
    const DECORATIVE = 4;

    private static $values = array(
        FirePlaceType::GAS => 'gas',
        FirePlaceType::WOOD => 'wood',
        FirePlaceType::ELECTRIC => 'electric',
        FirePlaceType::DECORATIVE => 'decorative'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return FirePlaceType::$values[$this->value];
    }

    function __toString() {
        return $this->getText();
    }
}