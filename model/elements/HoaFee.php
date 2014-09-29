<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class HoaFee extends Element {
    private $hoa_fee;
    private $hoa_period;
    private $hoa_description;

    /**
     * @param mixed $hoa_description
     */
    public function setHoaDescription($hoa_description) {
        $this->hoa_description = $hoa_description;
    }

    /**
     * @return mixed
     */
    public function getHoaDescription() {
        return $this->hoa_description;
    }

    /**
     * @param mixed $hoa_fee
     */
    public function setHoaFee($hoa_fee) {
        $this->hoa_fee = $hoa_fee;
    }

    /**
     * @return mixed
     */
    public function getHoaFee() {
        return $this->hoa_fee;
    }

    /**
     * @param mixed $hoa_period
     */
    public function setHoaPeriod($hoa_period) {
        $this->hoa_period = $hoa_period;
    }

    /**
     * @return mixed
     */
    public function getHoaPeriod() {
        return $this->hoa_period;
    }
} 