<?php

class AdditionalFees {
    private $additional_fees;

    public function __construct(Fees $fees) {
        $this->additional_fees = array($fees);
    }

    public function addFees(Fees $fees) {
        array_push($this->additional_fees, $fees);
    }

    public function getFees($index) {
        return $this->additional_fees[$index];
    }

    public function removeFees($index) {
        unset($this->additional_fees[$index]);
    }

    public function getSize() {
        return count($this->additional_fees);
    }
}
