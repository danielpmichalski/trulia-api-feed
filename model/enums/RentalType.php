<?php
include_once('Enum.php');

class RentalType extends Enum {
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

    protected $values = array(
        self::STANDARD => 'Standard',
        self::CORPORATE => 'Corporate',
        self::SENIOR => 'Senior',
        self::MILITARY => 'Military',
        self::CAMPUS => 'Campus',
        self::MARKET_RATE_APT => 'market rate apt',
        self::CONDOMINIUM => 'condominium',
        self::COOPERATIVE => 'cooperative',
        self::ASSISTED_LIVING => 'assisted living',
        self::SUBSIDIZED => 'subsidized',
        self::NURSING_HOME => 'nursing home',
        self::STUDENT => 'student',
        self::VACATION => 'vacation',
        self::OTHER => 'other'
    );
}