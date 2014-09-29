<?php
include_once('Enum.php');

class RentalType implements Enum {
    const STANDARD = 1;
    const CORPORATE = 2;
    const SENIOR = 3;
    const MILITARY = 4;
    const CAMPUS = 5;
    const MARKET_RATE_APT = 6;
    const CONDOMINIUM = 7;
    const COOPERATIVE = 8;
    const ASSISTED_LIVING = 9;
    const SUBSIDIZED = 10;
    const NURSING_HOME = 11;
    const STUDENT = 12;
    const VACATION = 13;
    const OTHER = 14;

    private static $values = array(
        RentalType::STANDARD => 'Standard',
        RentalType::CORPORATE => 'Corporate',
        RentalType::SENIOR => 'Senior',
        RentalType::MILITARY => 'Military',
        RentalType::CAMPUS => 'Campus',
        RentalType::MARKET_RATE_APT => 'market rate apt',
        RentalType::CONDOMINIUM => 'condominium',
        RentalType::COOPERATIVE => 'cooperative',
        RentalType::ASSISTED_LIVING => 'assisted living',
        RentalType::SUBSIDIZED => 'subsidized',
        RentalType::NURSING_HOME => 'nursing home',
        RentalType::STUDENT => 'student',
        RentalType::VACATION => 'vacation',
        RentalType::OTHER => 'other'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return RentalType::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
} 