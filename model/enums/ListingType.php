<?php
include_once('Enum.php');

class ListingType extends Enum {
    const RESALE = 1;
    const FORECLOSURE = 2;
    const NEW_HOME = 3;
    const RENTAL = 4;

    protected $values = array(
        self::RESALE => 'resale',
        self::FORECLOSURE => 'foreclosure',
        self::NEW_HOME => 'new home',
        self::RENTAL => 'rental',
    );
}