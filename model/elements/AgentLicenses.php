<?php
include_once(MODEL_ROOT . '/elements/Collection.php');

class AgentLicenses extends Collection {
    public function add(AgentLicense $element) {
        array_push($this->collection, $element);
    }
}
