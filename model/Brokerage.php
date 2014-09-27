<?php
require_once('Element.php');
require_once('BrokerageAddress.php');

class Brokerage extends Element {
    private $brokerage_name;
    private $brokerage_email;
    private $brokerage_broker_name;
    private $brokerage_id;
    private $brokerage_mls_code;
    private $brokerage_phone;
    private $brokerage_website;
    private $brokerage_logo_url;
    private $brokerage_address;

    /**
     * @param BrokerageAddress $brokerage_address
     */
    public function setBrokerageAddress(BrokerageAddress $brokerage_address) {
        $this->brokerage_address = $brokerage_address;
    }

    /**
     * @return BrokerageAddress
     */
    public function getBrokerageAddress() {
        return $this->brokerage_address;
    }

    /**
     * @param mixed $brokerage_broker_name
     */
    public function setBrokerageBrokerName($brokerage_broker_name) {
        $this->brokerage_broker_name = $brokerage_broker_name;
    }

    /**
     * @return mixed
     */
    public function getBrokerageBrokerName() {
        return $this->brokerage_broker_name;
    }

    /**
     * @param mixed $brokerage_email
     */
    public function setBrokerageEmail($brokerage_email) {
        $this->brokerage_email = $brokerage_email;
    }

    /**
     * @return mixed
     */
    public function getBrokerageEmail() {
        return $this->brokerage_email;
    }

    /**
     * @param mixed $brokerage_id
     */
    public function setBrokerageId($brokerage_id) {
        $this->brokerage_id = $brokerage_id;
    }

    /**
     * @return mixed
     */
    public function getBrokerageId() {
        return $this->brokerage_id;
    }

    /**
     * @param mixed $brokerage_logo_url
     */
    public function setBrokerageLogoUrl($brokerage_logo_url) {
        $this->brokerage_logo_url = $brokerage_logo_url;
    }

    /**
     * @return mixed
     */
    public function getBrokerageLogoUrl() {
        return $this->brokerage_logo_url;
    }

    /**
     * @param mixed $brokerage_mls_code
     */
    public function setBrokerageMlsCode($brokerage_mls_code) {
        $this->brokerage_mls_code = $brokerage_mls_code;
    }

    /**
     * @return mixed
     */
    public function getBrokerageMlsCode() {
        return $this->brokerage_mls_code;
    }

    /**
     * @param mixed $brokerage_name
     */
    public function setBrokerageName($brokerage_name) {
        $this->brokerage_name = $brokerage_name;
    }

    /**
     * @return mixed
     */
    public function getBrokerageName() {
        return $this->brokerage_name;
    }

    /**
     * @param mixed $brokerage_phone
     */
    public function setBrokeragePhone($brokerage_phone) {
        $this->brokerage_phone = $brokerage_phone;
    }

    /**
     * @return mixed
     */
    public function getBrokeragePhone() {
        return $this->brokerage_phone;
    }

    /**
     * @param mixed $brokerage_website
     */
    public function setBrokerageWebsite($brokerage_website) {
        $this->brokerage_website = $brokerage_website;
    }

    /**
     * @return mixed
     */
    public function getBrokerageWebsite() {
        return $this->brokerage_website;
    }
} 