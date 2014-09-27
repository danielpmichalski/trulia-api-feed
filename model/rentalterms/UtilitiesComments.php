<?php
require_once('../Collection.php');

class UtilitiesComments extends Collection {
    public function add($element) {
        array_push($this->collection, $element);
    }
} 