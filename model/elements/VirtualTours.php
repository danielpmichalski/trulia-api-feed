<?php
include_once(MODEL_ROOT . '/elements/Collection.php');

class VirtualTours extends Collection {
    public function add(VirtualTour $element) {
        array_push($this->collection, $element);
    }
}
