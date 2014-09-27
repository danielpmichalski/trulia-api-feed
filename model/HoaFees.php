<?php
require_once('Collection.php');

class HoaFees extends Collection {
    public function add(HoaFee $element) {
        array_push($this->collection, $element);
    }
}
