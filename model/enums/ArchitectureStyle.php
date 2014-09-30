<?php
include_once('Enum.php');

class ArchitectureStyle extends Enum {
    const A_FRAME = 1;
    const BUNGALOW = 2;
    const COLONIAL = 3;
    const CONTEMPORARY = 4;
    const COTTAGE = 5;
    const CUSTOM = 6;
    const DOME = 7;
    const HIGH_RISE = 8;
    const HISTORICAL = 9;
    const LOG_CABIN = 10;
    const MANSION = 11;
    const MEDITERRANEAN = 12;
    const OTHER = 13;
    const PREFAB_MODULAR = 14;
    const RANCH = 15;
    const SPANISH = 16;
    const VICTORIAN = 17;

    protected $values = array(
        self::A_FRAME => 'A-Frame',
        self::BUNGALOW => 'Bungalow',
        self::COLONIAL => 'Colonial',
        self::CONTEMPORARY => 'Contemporary',
        self::COTTAGE => 'Cottage',
        self::CUSTOM => 'Custom',
        self::DOME => 'Dome',
        self::HIGH_RISE => 'High-rise',
        self::HISTORICAL => 'Historical',
        self::LOG_CABIN => 'Log Cabin',
        self::MANSION => 'Mansion',
        self::MEDITERRANEAN => 'Mediterranean',
        self::PREFAB_MODULAR => 'Prefab/Modular',
        self::RANCH => 'Ranch',
        self::SPANISH => 'Spanish',
        self::VICTORIAN => 'Victorian',
        self::OTHER => 'Other'
    );
}
