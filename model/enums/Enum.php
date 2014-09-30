<?php

abstract class Enum {
    protected $value;
    protected $values;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getText() {
        return $this->values[$this->value];
    }

    public function __toString() {
        return "" . $this->getText();
    }
}