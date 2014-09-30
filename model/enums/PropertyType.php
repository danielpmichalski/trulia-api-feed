<?php
include_once('Enum.php');

class PropertyType extends Enum {
    const APARTMENT_CONDO_TOWNHOUSE = 1;
    const CONDO = 2;
    const TOWNHOUSE = 3;
    const COOP = 4;
    const APARTMENT = 5;
    const LOFT = 6;
    const TIC = 7;
    const MOBILE_MANUFACTURED = 8;
    const FARM_RANCH = 9;
    const MULTI_FAMILY = 10;
    const INCOME_INVESTMENT = 11;
    const HOUSEBOAT = 12;
    const LOT_LAND = 13;
    const SINGLE_FAMILY_HOME = 14;

    protected $values = array(
        self::APARTMENT_CONDO_TOWNHOUSE => 'apartment/condo/townhouse',
        self::CONDO => 'condo',
        self::TOWNHOUSE => 'townhouse',
        self::COOP => 'coop',
        self::APARTMENT => 'apartment',
        self::LOFT => 'loft',
        self::TIC => 'tic',
        self::MOBILE_MANUFACTURED => 'mobile/manufactured',
        self::FARM_RANCH => 'farm/ranch',
        self::MULTI_FAMILY => 'multi-family',
        self::INCOME_INVESTMENT => 'income/investment',
        self::HOUSEBOAT => 'houseboat',
        self::LOT_LAND => 'lot/land',
        self::SINGLE_FAMILY_HOME => 'single-family home'
    );
}