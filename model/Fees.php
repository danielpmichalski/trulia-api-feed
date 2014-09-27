<?php
require_once('Collection.php');

class Fees extends Collection {
    public function add(Fee $element) {
        array_push($this->collection, $element);
    }
}
