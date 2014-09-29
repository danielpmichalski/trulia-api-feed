<?php
include_once('Enum.php');

class GeoCodeType implements Enum {
    const EXACT = 1;
    const OFFSET = 2;
    const APPROXIMATE = 3;

    private static $values = array(
        GeoCodeType::EXACT => 'exact',
        GeoCodeType::OFFSET => 'offset',
        GeoCodeType::APPROXIMATE => 'approximate'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return GeoCodeType::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
} 