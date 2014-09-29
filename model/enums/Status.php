<?php
include_once('Enum.php');

class Status implements Enum {
    const FOR_RENT = 1;
    const FOR_SALE = 2;
    const PENDING = 3;
    const ACTIVE_CONTINGENT = 4;
    const SOLD = 5;
    const WITHDRAWN = 6;
    const RENTED = 7;
    const OFF_MARKET = 8;

    private static $values = array(
        Status::FOR_RENT => 'for rent',
        Status::FOR_SALE => 'for sale',
        Status::PENDING => 'pending',
        Status::ACTIVE_CONTINGENT => 'active contingent',
        Status::SOLD => 'sold',
        Status::WITHDRAWN => 'withdrawn',
        Status::RENTED => 'rented',
        Status::OFF_MARKET => 'off market'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return Status::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
} 