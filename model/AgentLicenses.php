<?php
require_once('Collection.php');

class AgentLicenses extends Collection {
    public function add(AgentLicense $element) {
        array_push($this->collection, $element);
    }
}
