<?php
include_once('Enum.php');

class ParkingSpaceFee extends Enum {
    const FREE = 1;
    const PAID = 2;
    const BOTH = 3;

    protected $values = array(
        self::FREE => 'free',
        self::PAID => 'paid',
        self::BOTH => 'both'
    );
}