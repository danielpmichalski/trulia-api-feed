<?php
include_once(MODEL_ROOT . '/elements/Collection.php');

class PetComments extends Collection {
    public function add($element) {
        array_push($this->collection, $element);
    }
} 