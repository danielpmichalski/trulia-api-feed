<?php
include_once('Enum.php');

class GarageType implements Enum {
    const ATTACHED = 1;
    const DETACHED = 2;

    private static $values = array(
        GarageType::ATTACHED => 'attached',
        GarageType::DETACHED => 'detached'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return GarageType::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
}