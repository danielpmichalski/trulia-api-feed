<?php
include_once(MODEL_ROOT . '/elements/Collection.php');

class Videos extends Collection {
    public function add(Video $element) {
        array_push($this->videos, $element);
    }
}
