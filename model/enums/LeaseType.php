<?php
include_once('Enum.php');

class LeaseType implements Enum {
    const SUBLET = 1;
    const MONTH_TO_MONTH = 2;
    const ANNUAL = 3;
    const BI_ANNUAL = 4;

    private static $values = array(
        LeaseType::SUBLET => 'sublet',
        LeaseType::MONTH_TO_MONTH => 'month-to-month',
        LeaseType::ANNUAL => 'annual',
        LeaseType::BI_ANNUAL => 'bi-annual'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return LeaseType::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
} 