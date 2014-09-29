<?php
include_once(MODEL_ROOT . '/elements/Collection.php');

class Schools extends Collection {
    public function add(SchoolDistrict $element) {
        array_push($this->collection, $element);
    }
}
