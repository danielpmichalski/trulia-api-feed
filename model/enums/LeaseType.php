<?php
include_once('Enum.php');

class LeaseType extends Enum {
    const SUBLET = 1;
    const MONTH_TO_MONTH = 2;
    const ANNUAL = 3;
    const BI_ANNUAL = 4;

    protected $values = array(
        self::SUBLET => 'sublet',
        self::MONTH_TO_MONTH => 'month-to-month',
        self::ANNUAL => 'annual',
        self::BI_ANNUAL => 'bi-annual'
    );
}