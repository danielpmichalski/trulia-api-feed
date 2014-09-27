<?php
require_once('../Collection.php');

class AdditionalAppliances extends Collection {
    public function add(AdditionalAppliance $element) {
        array_push($this->collection, $element);
    }
} 