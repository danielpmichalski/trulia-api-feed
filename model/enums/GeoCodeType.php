<?php
include_once('Enum.php');

class GeoCodeType extends Enum {
    const EXACT = 1;
    const OFFSET = 2;
    const APPROXIMATE = 3;

    protected $values = array(
        self::EXACT => 'exact',
        self::OFFSET => 'offset',
        self::APPROXIMATE => 'approximate'
    );
}