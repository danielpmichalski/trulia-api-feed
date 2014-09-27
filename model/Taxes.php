<?php
require_once('Collection.php');

class Taxes extends Collection {
    public function add(Tax $element) {
        array_push($this->collection, $element);
    }
}
