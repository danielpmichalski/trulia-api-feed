<?php
include_once('Enum.php');

class HeatingFuel implements Enum {
    const COAL = 1;
    const OIL = 2;
    const GAS = 3;
    const ELECTRIC = 4;
    const PROPANE = 5;
    const BUTANE = 6;
    const SOLAR = 7;
    const WOODPELLET = 8;
    const OTHER = 9;
    const NONE = 10;

    private static $values = array(
        HeatingFuel::COAL => 'coal',
        HeatingFuel::OIL => 'oil',
        HeatingFuel::GAS => 'gas',
        HeatingFuel::ELECTRIC => 'electric',
        HeatingFuel::PROPANE => 'propane',
        HeatingFuel::BUTANE => 'butane',
        HeatingFuel::SOLAR => 'solar',
        HeatingFuel::WOODPELLET => 'woodpellet',
        HeatingFuel::OTHER => 'other',
        HeatingFuel::NONE => 'none'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return HeatingFuel::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
} 