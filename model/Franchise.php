<?php
require_once('Element.php');

class Franchise extends Element {
    private $franchise_name;
    private $franchise_phone;
    private $franchise_email;
    private $franchise_website;
    private $franchise_logo_url;

    /**
     * @param mixed $franchise_email
     */
    public function setFranchiseEmail($franchise_email) {
        $this->franchise_email = $franchise_email;
    }

    /**
     * @return mixed
     */
    public function getFranchiseEmail() {
        return $this->franchise_email;
    }

    /**
     * @param mixed $franchise_logo_url
     */
    public function setFranchiseLogoUrl($franchise_logo_url) {
        $this->franchise_logo_url = $franchise_logo_url;
    }

    /**
     * @return mixed
     */
    public function getFranchiseLogoUrl() {
        return $this->franchise_logo_url;
    }

    /**
     * @param mixed $franchise_name
     */
    public function setFranchiseName($franchise_name) {
        $this->franchise_name = $franchise_name;
    }

    /**
     * @return mixed
     */
    public function getFranchiseName() {
        return $this->franchise_name;
    }

    /**
     * @param mixed $franchise_phone
     */
    public function setFranchisePhone($franchise_phone) {
        $this->franchise_phone = $franchise_phone;
    }

    /**
     * @return mixed
     */
    public function getFranchisePhone() {
        return $this->franchise_phone;
    }

    /**
     * @param mixed $franchise_website
     */
    public function setFranchiseWebsite($franchise_website) {
        $this->franchise_website = $franchise_website;
    }

    /**
     * @return mixed
     */
    public function getFranchiseWebsite() {
        return $this->franchise_website;
    }
} 