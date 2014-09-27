<?php
require_once('Element.php');
require_once('BuilderAddress.php');

class Builder extends Element {
    private $builder_id;
    private $builder_name;
    private $builder_phone;
    private $builder_email;
    private $builder_lead_email;
    private $builder_logo_url;
    private $builder_address;

    /**
     * @param BuilderAddress $builder_address
     */
    public function setBuilderAddress(BuilderAddress $builder_address) {
        $this->builder_address = $builder_address;
    }

    /**
     * @return BuilderAddress
     */
    public function getBuilderAddress() {
        return $this->builder_address;
    }

    /**
     * @param mixed $builder_email
     */
    public function setBuilderEmail($builder_email) {
        $this->builder_email = $builder_email;
    }

    /**
     * @return mixed
     */
    public function getBuilderEmail() {
        return $this->builder_email;
    }

    /**
     * @param mixed $builder_id
     */
    public function setBuilderId($builder_id) {
        $this->builder_id = $builder_id;
    }

    /**
     * @return mixed
     */
    public function getBuilderId() {
        return $this->builder_id;
    }

    /**
     * @param mixed $builder_lead_email
     */
    public function setBuilderLeadEmail($builder_lead_email) {
        $this->builder_lead_email = $builder_lead_email;
    }

    /**
     * @return mixed
     */
    public function getBuilderLeadEmail() {
        return $this->builder_lead_email;
    }

    /**
     * @param mixed $builder_logo_url
     */
    public function setBuilderLogoUrl($builder_logo_url) {
        $this->builder_logo_url = $builder_logo_url;
    }

    /**
     * @return mixed
     */
    public function getBuilderLogoUrl() {
        return $this->builder_logo_url;
    }

    /**
     * @param mixed $builder_name
     */
    public function setBuilderName($builder_name) {
        $this->builder_name = $builder_name;
    }

    /**
     * @return mixed
     */
    public function getBuilderName() {
        return $this->builder_name;
    }

    /**
     * @param mixed $builder_phone
     */
    public function setBuilderPhone($builder_phone) {
        $this->builder_phone = $builder_phone;
    }

    /**
     * @return mixed
     */
    public function getBuilderPhone() {
        return $this->builder_phone;
    }
} 