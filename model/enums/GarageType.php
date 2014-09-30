<?php
include_once('Enum.php');

class GarageType extends Enum {
    const ATTACHED = 1;
    const DETACHED = 2;

    protected $values = array(
        self::ATTACHED => 'attached',
        self::DETACHED => 'detached'
    );
}