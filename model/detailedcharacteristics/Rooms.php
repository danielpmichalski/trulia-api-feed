<?php
require_once('../Collection.php');

class Rooms extends Collection {
    public function add(Room $element) {
        array_push($this->collection, $element);
    }
} 