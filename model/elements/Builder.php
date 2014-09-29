<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/BuilderAddress.php');

class Builder extends Element {
    private $id;
    private $name;
    private $phone;
    private $email;
    private $lead_email;
    private $logo_url;
    private $website;
    private $address;

    /**
     * @param BuilderAddress $builder_address
     */
    public function setAddress(BuilderAddress $builder_address) {
        $this->address = $builder_address;
    }

    /**
     * @return BuilderAddress
     */
    public function getAddress() {
        if ($this->address == null) {
            $this->address = new BuilderAddress();
        }
        return $this->address;
    }

    /**
     * @param mixed $builder_email
     */
    public function setEmail($builder_email) {
        $this->email = $builder_email;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $builder_id
     */
    public function setId($builder_id) {
        $this->id = $builder_id;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $builder_lead_email
     */
    public function setLeadEmail($builder_lead_email) {
        $this->lead_email = $builder_lead_email;
    }

    /**
     * @return mixed
     */
    public function getLeadEmail() {
        return $this->lead_email;
    }

    /**
     * @param mixed $builder_logo_url
     */
    public function setLogoUrl($builder_logo_url) {
        $this->logo_url = $builder_logo_url;
    }

    /**
     * @return mixed
     */
    public function getLogoUrl() {
        return $this->logo_url;
    }

    /**
     * @param mixed $builder_name
     */
    public function setName($builder_name) {
        $this->name = $builder_name;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $builder_phone
     */
    public function setPhone($builder_phone) {
        $this->phone = $builder_phone;
    }

    /**
     * @return mixed
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getWebsite() {
        return $this->website;
    }

    /**
     * @param mixed $website
     */
    public function setWebsite($website) {
        $this->website = $website;
    }
} 