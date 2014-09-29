<?php
include_once(MODEL_ROOT . '/elements/Collection.php');

class FloorplanLayouts extends Collection {
    public function add(FloorplanLayout $element) {
        array_push($this->collection, $element);
    }
}
