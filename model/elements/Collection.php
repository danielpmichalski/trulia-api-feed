<?php

class Collection {
    protected $collection;

    public function __construct(Element $element) {
        $this->collection = array($element);
    }

    public function add(Element $element) {
        array_push($this->collection, $element);
    }

    public function get($index) {
        return $this->collection[$index];
    }

    public function remove($index) {
        unset($this->collection[$index]);
    }

    public function getSize() {
        return count($this->collection);
    }

    public function getAll() {
        return $this->collection;
    }
}