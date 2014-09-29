<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/OfficeAddress.php');

class Office extends Element {
    private $name;
    private $id;
    private $mls_code;
    private $broker_id;
    private $phone;
    private $email;
    private $website;
    private $address;

    /**
     * @param OfficeAddress $office_address
     */
    public function setAddress(OfficeAddress $office_address) {
        $this->address = $office_address;
    }

    /**
     * @return OfficeAddress
     */
    public function getAddress() {
        if ($this->address == null) {
            $this->address = new OfficeAddress();
        }
        return $this->address;
    }

    /**
     * @param mixed $office_broker_id
     */
    public function setBrokerId($office_broker_id) {
        $this->broker_id = $office_broker_id;
    }

    /**
     * @return mixed
     */
    public function getBrokerId() {
        return $this->broker_id;
    }

    /**
     * @param mixed $office_email
     */
    public function setEmail($office_email) {
        $this->email = $office_email;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $office_id
     */
    public function setId($office_id) {
        $this->id = $office_id;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $office_mls_code
     */
    public function setMlsCode($office_mls_code) {
        $this->mls_code = $office_mls_code;
    }

    /**
     * @return mixed
     */
    public function getMlsCode() {
        return $this->mls_code;
    }

    /**
     * @param mixed $office_name
     */
    public function setName($office_name) {
        $this->name = $office_name;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $office_phone
     */
    public function setPhone($office_phone) {
        $this->phone = $office_phone;
    }

    /**
     * @return mixed
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * @param mixed $office_website
     */
    public function setWebsite($office_website) {
        $this->website = $office_website;
    }

    /**
     * @return mixed
     */
    public function getWebsite() {
        return $this->website;
    }
} 