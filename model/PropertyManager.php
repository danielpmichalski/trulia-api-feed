<?php
require_once('Element.php');
require_once('PropertyManagerOfficeHours.php');

class PropertyManager extends Element {
    private $property_manager_name;
    private $property_management_company_name;
    private $property_manager_phone;
    private $property_manager_email;
    private $property_manager_lead_email;
    private $property_manager_website;
    private $property_manager_logo_url;
    private $property_manager_office_hours;

    /**
     * @param PropertyManagerOfficeHours $property_management_company_name
     */
    public function setPropertyManagementCompanyName(PropertyManagerOfficeHours $property_management_company_name) {
        $this->property_management_company_name = $property_management_company_name;
    }

    /**
     * @return PropertyManagerOfficeHours
     */
    public function getPropertyManagementCompanyName() {
        return $this->property_management_company_name;
    }

    /**
     * @param mixed $property_manager_email
     */
    public function setPropertyManagerEmail($property_manager_email) {
        $this->property_manager_email = $property_manager_email;
    }

    /**
     * @return mixed
     */
    public function getPropertyManagerEmail() {
        return $this->property_manager_email;
    }

    /**
     * @param mixed $property_manager_lead_email
     */
    public function setPropertyManagerLeadEmail($property_manager_lead_email) {
        $this->property_manager_lead_email = $property_manager_lead_email;
    }

    /**
     * @return mixed
     */
    public function getPropertyManagerLeadEmail() {
        return $this->property_manager_lead_email;
    }

    /**
     * @param mixed $property_manager_logo_url
     */
    public function setPropertyManagerLogoUrl($property_manager_logo_url) {
        $this->property_manager_logo_url = $property_manager_logo_url;
    }

    /**
     * @return mixed
     */
    public function getPropertyManagerLogoUrl() {
        return $this->property_manager_logo_url;
    }

    /**
     * @param mixed $property_manager_name
     */
    public function setPropertyManagerName($property_manager_name) {
        $this->property_manager_name = $property_manager_name;
    }

    /**
     * @return mixed
     */
    public function getPropertyManagerName() {
        return $this->property_manager_name;
    }

    /**
     * @param mixed $property_manager_office_hours
     */
    public function setPropertyManagerOfficeHours($property_manager_office_hours) {
        $this->property_manager_office_hours = $property_manager_office_hours;
    }

    /**
     * @return mixed
     */
    public function getPropertyManagerOfficeHours() {
        return $this->property_manager_office_hours;
    }

    /**
     * @param mixed $property_manager_phone
     */
    public function setPropertyManagerPhone($property_manager_phone) {
        $this->property_manager_phone = $property_manager_phone;
    }

    /**
     * @return mixed
     */
    public function getPropertyManagerPhone() {
        return $this->property_manager_phone;
    }

    /**
     * @param mixed $property_manager_website
     */
    public function setPropertyManagerWebsite($property_manager_website) {
        $this->property_manager_website = $property_manager_website;
    }

    /**
     * @return mixed
     */
    public function getPropertyManagerWebsite() {
        return $this->property_manager_website;
    }
} 