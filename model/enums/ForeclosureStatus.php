<?php
include_once('Enum.php');

class ForeclosureStatus implements Enum {
    const NOTICE_OF_DEFAULT = 1;
    const LIS_PENDENS = 2;
    const NOTICE_OF_TRUSTEE_SALE = 3;
    const NOTICE_OF_FORECLOSURE_SALE = 4;
    const REO = 5;

    private static $values = array(
        ForeclosureStatus::NOTICE_OF_DEFAULT => 'notice of default (pre-foreclosure)',
        ForeclosureStatus::LIS_PENDENS => 'lis pendens (pre-foreclosure)',
        ForeclosureStatus::NOTICE_OF_TRUSTEE_SALE => 'notice of trustee sale (auction)',
        ForeclosureStatus::NOTICE_OF_FORECLOSURE_SALE => 'notice of foreclosure sale (auction)',
        ForeclosureStatus::REO => 'reo - bank owned'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return ForeclosureStatus::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
} 