<?php
require_once('../Collection.php');

class LeasePeriods extends Collection {
    public function add($element) {
        array_push($this->collection, $element);
    }
} 