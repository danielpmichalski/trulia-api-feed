<?php
require_once('Element.php');
require_once('OfficeAddress.php');

class Office extends Element {
    private $office_name;
    private $office_id;
    private $office_mls_code;
    private $office_broker_id;
    private $office_phone;
    private $office_email;
    private $office_website;
    private $office_address;

    /**
     * @param OfficeAddress $office_address
     */
    public function setOfficeAddress(OfficeAddress $office_address) {
        $this->office_address = $office_address;
    }

    /**
     * @return OfficeAddress
     */
    public function getOfficeAddress() {
        return $this->office_address;
    }

    /**
     * @param mixed $office_broker_id
     */
    public function setOfficeBrokerId($office_broker_id) {
        $this->office_broker_id = $office_broker_id;
    }

    /**
     * @return mixed
     */
    public function getOfficeBrokerId() {
        return $this->office_broker_id;
    }

    /**
     * @param mixed $office_email
     */
    public function setOfficeEmail($office_email) {
        $this->office_email = $office_email;
    }

    /**
     * @return mixed
     */
    public function getOfficeEmail() {
        return $this->office_email;
    }

    /**
     * @param mixed $office_id
     */
    public function setOfficeId($office_id) {
        $this->office_id = $office_id;
    }

    /**
     * @return mixed
     */
    public function getOfficeId() {
        return $this->office_id;
    }

    /**
     * @param mixed $office_mls_code
     */
    public function setOfficeMlsCode($office_mls_code) {
        $this->office_mls_code = $office_mls_code;
    }

    /**
     * @return mixed
     */
    public function getOfficeMlsCode() {
        return $this->office_mls_code;
    }

    /**
     * @param mixed $office_name
     */
    public function setOfficeName($office_name) {
        $this->office_name = $office_name;
    }

    /**
     * @return mixed
     */
    public function getOfficeName() {
        return $this->office_name;
    }

    /**
     * @param mixed $office_phone
     */
    public function setOfficePhone($office_phone) {
        $this->office_phone = $office_phone;
    }

    /**
     * @return mixed
     */
    public function getOfficePhone() {
        return $this->office_phone;
    }

    /**
     * @param mixed $office_website
     */
    public function setOfficeWebsite($office_website) {
        $this->office_website = $office_website;
    }

    /**
     * @return mixed
     */
    public function getOfficeWebsite() {
        return $this->office_website;
    }
} 