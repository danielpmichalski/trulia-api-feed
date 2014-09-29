<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class SimpleElement extends Element {
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function __toString() {
        return "$this->value";
    }
} 