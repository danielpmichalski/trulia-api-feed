<?php
include_once('Enum.php');

class HeatingSystem extends Enum {
    const GAS = 1;
    const ELECTRIC = 2;
    const RADIANT = 3;
    const OTHER = 4;

    protected $values = array(
        self::GAS => 'gas',
        self::ELECTRIC => 'electric',
        self::RADIANT => 'radiant',
        self::OTHER => 'other'
    );
}