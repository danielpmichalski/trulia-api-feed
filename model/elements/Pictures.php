<?php
include_once(MODEL_ROOT . '/elements/Collection.php');

class Pictures extends Collection {
    public function add(Picture $element) {
        array_push($this->collection, $element);
    }
}
