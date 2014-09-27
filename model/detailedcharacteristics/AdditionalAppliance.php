<?php
require_once('../Element.php');

class AdditionalAppliance extends Element {
    private $additional_appliance_name;
    private $additional_appliance_description;

    /**
     * @param mixed $additional_appliance_description
     */
    public function setAdditionalApplianceDescription($additional_appliance_description) {
        $this->additional_appliance_description = $additional_appliance_description;
    }

    /**
     * @return mixed
     */
    public function getAdditionalApplianceDescription() {
        return $this->additional_appliance_description;
    }

    /**
     * @param mixed $additional_appliance_name
     */
    public function setAdditionalApplianceName($additional_appliance_name) {
        $this->additional_appliance_name = $additional_appliance_name;
    }

    /**
     * @return mixed
     */
    public function getAdditionalApplianceName() {
        return $this->additional_appliance_name;
    }
} 