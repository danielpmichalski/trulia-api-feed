<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/BrokerageAddress.php');

class Brokerage extends Element {
    private $name;
    private $email;
    private $broker_name;
    private $id;
    private $mls_code;
    private $phone;
    private $website;
    private $logo_url;
    private $address;

    /**
     * @param BrokerageAddress $brokerage_address
     */
    public function setAddress(BrokerageAddress $brokerage_address) {
        $this->address = $brokerage_address;
    }

    /**
     * @return BrokerageAddress
     */
    public function getAddress() {
        if ($this->address == null) {
            $this->address = new BrokerageAddress();
        }
        return $this->address;
    }

    /**
     * @param mixed $brokerage_broker_name
     */
    public function setBrokerName($brokerage_broker_name) {
        $this->broker_name = $brokerage_broker_name;
    }

    /**
     * @return mixed
     */
    public function getBrokerName() {
        return $this->broker_name;
    }

    /**
     * @param mixed $brokerage_email
     */
    public function setEmail($brokerage_email) {
        $this->email = $brokerage_email;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $brokerage_id
     */
    public function setId($brokerage_id) {
        $this->id = $brokerage_id;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $brokerage_logo_url
     */
    public function setLogoUrl($brokerage_logo_url) {
        $this->logo_url = $brokerage_logo_url;
    }

    /**
     * @return mixed
     */
    public function getLogoUrl() {
        return $this->logo_url;
    }

    /**
     * @param mixed $brokerage_mls_code
     */
    public function setMlsCode($brokerage_mls_code) {
        $this->mls_code = $brokerage_mls_code;
    }

    /**
     * @return mixed
     */
    public function getMlsCode() {
        return $this->mls_code;
    }

    /**
     * @param mixed $brokerage_name
     */
    public function setName($brokerage_name) {
        $this->name = $brokerage_name;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $brokerage_phone
     */
    public function setPhone($brokerage_phone) {
        $this->phone = $brokerage_phone;
    }

    /**
     * @return mixed
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * @param mixed $brokerage_website
     */
    public function setWebsite($brokerage_website) {
        $this->website = $brokerage_website;
    }

    /**
     * @return mixed
     */
    public function getWebsite() {
        return $this->website;
    }
} 