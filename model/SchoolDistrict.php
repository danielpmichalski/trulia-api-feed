<?php
require_once('Element.php');

class SchoolDistrict extends Element {
    private $elementary;
    private $middle;
    private $junior_high;
    private $high;
    private $district_name;
    private $district_website;
    private $district_phone_number;

    /**
     * @param mixed $district_name
     */
    public function setDistrictName($district_name) {
        $this->district_name = $district_name;
    }

    /**
     * @return mixed
     */
    public function getDistrictName() {
        return $this->district_name;
    }

    /**
     * @param mixed $district_phone_number
     */
    public function setDistrictPhoneNumber($district_phone_number) {
        $this->district_phone_number = $district_phone_number;
    }

    /**
     * @return mixed
     */
    public function getDistrictPhoneNumber() {
        return $this->district_phone_number;
    }

    /**
     * @param mixed $district_website
     */
    public function setDistrictWebsite($district_website) {
        $this->district_website = $district_website;
    }

    /**
     * @return mixed
     */
    public function getDistrictWebsite() {
        return $this->district_website;
    }

    /**
     * @param mixed $elementary
     */
    public function setElementary($elementary) {
        $this->elementary = $elementary;
    }

    /**
     * @return mixed
     */
    public function getElementary() {
        return $this->elementary;
    }

    /**
     * @param mixed $high
     */
    public function setHigh($high) {
        $this->high = $high;
    }

    /**
     * @return mixed
     */
    public function getHigh() {
        return $this->high;
    }

    /**
     * @param mixed $junior_high
     */
    public function setJuniorHigh($junior_high) {
        $this->junior_high = $junior_high;
    }

    /**
     * @return mixed
     */
    public function getJuniorHigh() {
        return $this->junior_high;
    }

    /**
     * @param mixed $middle
     */
    public function setMiddle($middle) {
        $this->middle = $middle;
    }

    /**
     * @return mixed
     */
    public function getMiddle() {
        return $this->middle;
    }
} 