<?php
require_once('Collection.php');

class PropertyManagerOfficeHours extends Collection {
    public function add(OfficeDay $element) {
        array_push($this->collection, $element);
    }
} 