<?php
include_once('Enum.php');

class PriceTerm extends Enum {
    const NIGHT = 1;
    const WEEK = 2;
    const MONTH = 3;
    const YEAR = 4;

    protected $values = array(
        self::NIGHT => 'Night',
        self::WEEK => 'Week',
        self::MONTH => 'Month',
        self::YEAR => 'Year'
    );
}