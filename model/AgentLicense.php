<?php
require_once('Element.php');

class AgentLicense extends Element {
    private $agent_license_number;
    private $agent_license_category;
    private $agent_license_state;

    /**
     * @param mixed $agent_license_category
     */
    public function setAgentLicenseCategory($agent_license_category) {
        $this->agent_license_category = $agent_license_category;
    }

    /**
     * @return mixed
     */
    public function getAgentLicenseCategory() {
        return $this->agent_license_category;
    }

    /**
     * @param mixed $agent_license_number
     */
    public function setAgentLicenseNumber($agent_license_number) {
        $this->agent_license_number = $agent_license_number;
    }

    /**
     * @return mixed
     */
    public function getAgentLicenseNumber() {
        return $this->agent_license_number;
    }

    /**
     * @param mixed $agent_license_state
     */
    public function setAgentLicenseState($agent_license_state) {
        $this->agent_license_state = $agent_license_state;
    }

    /**
     * @return mixed
     */
    public function getAgentLicenseState() {
        return $this->agent_license_state;
    }
} 