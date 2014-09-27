<?php
require_once('Collection.php');

class Pictures extends Collection {
    public function add(Picture $element) {
        array_push($this->collection, $element);
    }
}
