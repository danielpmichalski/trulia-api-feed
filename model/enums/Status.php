<?php
include_once('Enum.php');

class Status extends Enum {
    const FOR_RENT = 1;
    const FOR_SALE = 2;
    const PENDING = 3;
    const ACTIVE_CONTINGENT = 4;
    const SOLD = 5;
    const WITHDRAWN = 6;
    const RENTED = 7;
    const OFF_MARKET = 8;

    protected $values = array(
        self::FOR_RENT => 'for rent',
        self::FOR_SALE => 'for sale',
        self::PENDING => 'pending',
        self::ACTIVE_CONTINGENT => 'active contingent',
        self::SOLD => 'sold',
        self::WITHDRAWN => 'withdrawn',
        self::RENTED => 'rented',
        self::OFF_MARKET => 'off market'
    );
}