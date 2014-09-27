<?php
require_once('../Collection.php');

class OtherAmenities extends Collection {
    public function add($element) {
        array_push($this->collection, $element);
    }
} 