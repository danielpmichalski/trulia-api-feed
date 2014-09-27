<?php
require_once('Collection.php');

class VirtualTours extends Collection {
    public function add(VirtualTour $element) {
        array_push($this->collection, $element);
    }
}
