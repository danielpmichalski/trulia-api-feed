<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class EmptyElement extends Element {
    public function __toString() {
        return "";
    }
} 