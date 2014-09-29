<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class Franchise extends Element {
    private $name;
    private $phone;
    private $email;
    private $website;
    private $logo_url;

    /**
     * @param mixed $franchise_email
     */
    public function setEmail($franchise_email) {
        $this->email = $franchise_email;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $franchise_logo_url
     */
    public function setLogoUrl($franchise_logo_url) {
        $this->logo_url = $franchise_logo_url;
    }

    /**
     * @return mixed
     */
    public function getLogoUrl() {
        return $this->logo_url;
    }

    /**
     * @param mixed $franchise_name
     */
    public function setName($franchise_name) {
        $this->name = $franchise_name;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $franchise_phone
     */
    public function setPhone($franchise_phone) {
        $this->phone = $franchise_phone;
    }

    /**
     * @return mixed
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * @param mixed $franchise_website
     */
    public function setWebsite($franchise_website) {
        $this->website = $franchise_website;
    }

    /**
     * @return mixed
     */
    public function getWebsite() {
        return $this->website;
    }
} 