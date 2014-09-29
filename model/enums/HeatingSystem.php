<?php
include_once('Enum.php');

class HeatingSystem implements Enum {
    const GAS = 1;
    const ELECTRIC = 2;
    const RADIANT = 3;
    const OTHER = 4;

    private static $values = array(
        HeatingSystem::GAS => 'gas',
        HeatingSystem::ELECTRIC => 'electric',
        HeatingSystem::RADIANT => 'radiant',
        HeatingSystem::OTHER => 'other'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return HeatingSystem::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
}