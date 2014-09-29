<?php
include_once(MODEL_ROOT . '/elements/Collection.php');

class ParkingTypes extends Collection {
    public function __construct() {
    }

    public function add($element) {
        array_push($this->collection, $element);
    }
} 