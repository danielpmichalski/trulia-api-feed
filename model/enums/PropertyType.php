<?php
include_once('Enum.php');

class PropertyType implements Enum {
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

    private static $values = array(
        PropertyType::APARTMENT_CONDO_TOWNHOUSE => 'apartment/condo/townhouse',
        PropertyType::CONDO => 'condo',
        PropertyType::TOWNHOUSE => 'townhouse',
        PropertyType::COOP => 'coop',
        PropertyType::APARTMENT => 'apartment',
        PropertyType::LOFT => 'loft',
        PropertyType::TIC => 'tic',
        PropertyType::MOBILE_MANUFACTURED => 'mobile/manufactured',
        PropertyType::FARM_RANCH => 'farm/ranch',
        PropertyType::MULTI_FAMILY => 'multi-family',
        PropertyType::INCOME_INVESTMENT => 'income/investment',
        PropertyType::HOUSEBOAT => 'houseboat',
        PropertyType::LOT_LAND => 'lot/land',
        PropertyType::SINGLE_FAMILY_HOME => 'single-family home'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return PropertyType::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
} 