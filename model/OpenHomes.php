<?php
require_once('Collection.php');

class OpenHomes extends Collection {
    public function add(OpenHome $element) {
        array_push($this->collection, $element);
    }
}
