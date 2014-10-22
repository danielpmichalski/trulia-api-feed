<?php
include_once('Enum.php');

class RangeType extends Enum {
    const GAS = 1;
    const ELECTRIC = 2;
    const OTHER = 3;

    protected $values = array(
        self::GAS => 'gas',
        self::ELECTRIC => 'electric',
        self::OTHER => 'other'
    );
}