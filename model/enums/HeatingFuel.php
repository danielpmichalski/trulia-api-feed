<?php
include_once('Enum.php');

class HeatingFuel extends Enum {
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

    protected $values = array(
        self::COAL => 'coal',
        self::OIL => 'oil',
        self::GAS => 'gas',
        self::ELECTRIC => 'electric',
        self::PROPANE => 'propane',
        self::BUTANE => 'butane',
        self::SOLAR => 'solar',
        self::WOODPELLET => 'woodpellet',
        self::OTHER => 'other',
        self::NONE => 'none'
    );
}