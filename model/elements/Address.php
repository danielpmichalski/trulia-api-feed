<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class Address extends Element {
    protected $street_address;
    protected $city_name;
    protected $zipcode;
    protected $state_code;

    /**
     * @param mixed $city_name
     */
    public function setCityName($city_name) {
        $this->city_name = $city_name;
    }

    /**
     * @return mixed
     */
    public function getCityName() {
        return $this->city_name;
    }

    /**
     * @param mixed $state_code
     */
    public function setStateCode($state_code) {
        $this->state_code = $state_code;
    }

    /**
     * @return mixed
     */
    public function getStateCode() {
        return $this->state_code;
    }

    /**
     * @param mixed $street_address
     */
    public function setStreetAddress($street_address) {
        $this->street_address = $street_address;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress() {
        return $this->street_address;
    }

    /**
     * @param mixed $zipcode
     */
    public function setZipcode($zipcode) {
        $this->zipcode = $zipcode;
    }

    /**
     * @return mixed
     */
    public function getZipcode() {
        return $this->zipcode;
    }
}
