<?php
include_once(MODEL_ROOT . '/elements/Collection.php');

class Fees extends Collection {
    public function add(Fee $element) {
        array_push($this->collection, $element);
    }
}
