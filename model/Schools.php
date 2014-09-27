<?php
require_once('Collection.php');

class Schools extends Collection {
    public function add(SchoolDistrict $element) {
        array_push($this->collection, $element);
    }
}
