<?php
include_once(MODEL_ROOT . '/elements/Collection.php');
include_once(MODEL_ROOT . '/enums/CreditCard.php');

class CreditCards extends Collection {
    public function __construct() {
    }

    public function add(CreditCard $element) {
        array_push($this->collection, $element);
    }
} 