<?php
require_once('Element.php');

class Fee extends Element {
    private $fee_type;
    private $fee_amount;
    private $fee_period;
    private $fee_description;

    /**
     * @param mixed $fee_amount
     */
    public function setFeeAmount($fee_amount) {
        $this->fee_amount = $fee_amount;
    }

    /**
     * @return mixed
     */
    public function getFeeAmount() {
        return $this->fee_amount;
    }

    /**
     * @param mixed $fee_description
     */
    public function setFeeDescription($fee_description) {
        $this->fee_description = $fee_description;
    }

    /**
     * @return mixed
     */
    public function getFeeDescription() {
        return $this->fee_description;
    }

    /**
     * @param mixed $fee_period
     */
    public function setFeePeriod($fee_period) {
        $this->fee_period = $fee_period;
    }

    /**
     * @return mixed
     */
    public function getFeePeriod() {
        return $this->fee_period;
    }

    /**
     * @param mixed $fee_type
     */
    public function setFeeType($fee_type) {
        $this->fee_type = $fee_type;
    }

    /**
     * @return mixed
     */
    public function getFeeType() {
        return $this->fee_type;
    }
} 