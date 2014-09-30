<?php
include_once('Enum.php');

class ForeclosureStatus extends Enum {
    const NOTICE_OF_DEFAULT = 1;
    const LIS_PENDENS = 2;
    const NOTICE_OF_TRUSTEE_SALE = 3;
    const NOTICE_OF_FORECLOSURE_SALE = 4;
    const REO = 5;

    protected $values = array(
        self::NOTICE_OF_DEFAULT => 'notice of default (pre-foreclosure)',
        self::LIS_PENDENS => 'lis pendens (pre-foreclosure)',
        self::NOTICE_OF_TRUSTEE_SALE => 'notice of trustee sale (auction)',
        self::NOTICE_OF_FORECLOSURE_SALE => 'notice of foreclosure sale (auction)',
        self::REO => 'reo - bank owned'
    );
}