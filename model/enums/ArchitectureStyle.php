<?php
include_once('Enum.php');

class ArchitectureStyle implements Enum {
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

    private static $values = array(
        ArchitectureStyle::A_FRAME => 'A-Frame',
        ArchitectureStyle::BUNGALOW => 'Bungalow',
        ArchitectureStyle::COLONIAL => 'Colonial',
        ArchitectureStyle::CONTEMPORARY => 'Contemporary',
        ArchitectureStyle::COTTAGE => 'Cottage',
        ArchitectureStyle::CUSTOM => 'Custom',
        ArchitectureStyle::DOME => 'Dome',
        ArchitectureStyle::HIGH_RISE => 'High-rise',
        ArchitectureStyle::HISTORICAL => 'Historical',
        ArchitectureStyle::LOG_CABIN => 'Log Cabin',
        ArchitectureStyle::MANSION => 'Mansion',
        ArchitectureStyle::MEDITERRANEAN => 'Mediterranean',
        ArchitectureStyle::PREFAB_MODULAR => 'Prefab/Modular',
        ArchitectureStyle::RANCH => 'Ranch',
        ArchitectureStyle::SPANISH => 'Spanish',
        ArchitectureStyle::VICTORIAN => 'Victorian',
        ArchitectureStyle::OTHER => 'Other'
    );

    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return self::$values[$this->value];
    }

    public function __toString() {
        return $this->getText();
    }
}
