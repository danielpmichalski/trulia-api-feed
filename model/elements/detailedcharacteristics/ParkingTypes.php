<?php
include_once(MODEL_ROOT . '/elements/Collection.php');
include_once(MODEL_ROOT . '/enums/ParkingType.php');

class ParkingTypes extends Collection {
    public function add(ParkingType $element) {
        array_push($this->collection, $element);
    }
} 