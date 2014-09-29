<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/PropertyManagerOfficeHours.php');
include_once(MODEL_ROOT . '/elements/OfficeDay.php');

class PropertyManager extends Element {
    private $name;
    private $management_company_name;
    private $phone;
    private $email;
    private $lead_email;
    private $website;
    private $logo_url;
    private $office_hours;

    /**
     * @param PropertyManagerOfficeHours $property_management_company_name
     */
    public function setManagementCompanyName(PropertyManagerOfficeHours $property_management_company_name) {
        $this->management_company_name = $property_management_company_name;
    }

    /**
     * @return PropertyManagerOfficeHours
     */
    public function getManagementCompanyName() {
        return $this->management_company_name;
    }

    /**
     * @param mixed $property_manager_email
     */
    public function setEmail($property_manager_email) {
        $this->email = $property_manager_email;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $property_manager_lead_email
     */
    public function setLeadEmail($property_manager_lead_email) {
        $this->lead_email = $property_manager_lead_email;
    }

    /**
     * @return mixed
     */
    public function getLeadEmail() {
        return $this->lead_email;
    }

    /**
     * @param mixed $property_manager_logo_url
     */
    public function setLogoUrl($property_manager_logo_url) {
        $this->logo_url = $property_manager_logo_url;
    }

    /**
     * @return mixed
     */
    public function getLogoUrl() {
        return $this->logo_url;
    }

    /**
     * @param mixed $property_manager_name
     */
    public function setName($property_manager_name) {
        $this->name = $property_manager_name;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $property_manager_office_hours
     */
    public function setOfficeHours($property_manager_office_hours) {
        $this->office_hours = $property_manager_office_hours;
    }

    /**
     * @return mixed
     */
    public function getOfficeHours() {
        if ($this->office_hours == null) {
            $this->office_hours = new PropertyManagerOfficeHours(new OfficeDay());
        }
        return $this->office_hours->getAll();
    }

    /**
     * @param mixed $property_manager_phone
     */
    public function setPhone($property_manager_phone) {
        $this->phone = $property_manager_phone;
    }

    /**
     * @return mixed
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * @param mixed $property_manager_website
     */
    public function setWebsite($property_manager_website) {
        $this->website = $property_manager_website;
    }

    /**
     * @return mixed
     */
    public function getWebsite() {
        return $this->website;
    }
} 