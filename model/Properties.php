<?php
include_once(MODEL_ROOT . '/elements/Collection.php');
include_once(MODEL_ROOT . '/Property.php');

class Properties extends Collection {
    public function add(Property $element) {
        array_push($this->collection, $element);
    }
} 