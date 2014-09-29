<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class Tax extends Element {
    private $tax_type;
    private $tax_year;
    private $tax_amount;
    private $tax_description;

    /**
     * @param mixed $tax_amount
     */
    public function setTaxAmount($tax_amount) {
        $this->tax_amount = $tax_amount;
    }

    /**
     * @return mixed
     */
    public function getTaxAmount() {
        return $this->tax_amount;
    }

    /**
     * @param mixed $tax_description
     */
    public function setTaxDescription($tax_description) {
        $this->tax_description = $tax_description;
    }

    /**
     * @return mixed
     */
    public function getTaxDescription() {
        return $this->tax_description;
    }

    /**
     * @param mixed $tax_type
     */
    public function setTaxType($tax_type) {
        $this->tax_type = $tax_type;
    }

    /**
     * @return mixed
     */
    public function getTaxType() {
        return $this->tax_type;
    }

    /**
     * @param mixed $tax_year
     */
    public function setTaxYear($tax_year) {
        $this->tax_year = $tax_year;
    }

    /**
     * @return mixed
     */
    public function getTaxYear() {
        return $this->tax_year;
    }
} 