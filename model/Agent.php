<?php
require_once('Element.php');
require_once('AgentLicenses.php');

class Agent extends Element {
    private $agent_name;
    private $agent_email;
    private $agent_phone;
    private $agent_alternate_email;
    private $agent_picture_url;
    private $agent_id;
    private $agent_licenses;

    public function __construct($agent_name, $agent_email) {
        $this->agent_name = $agent_name;
        $this->agent_email = $agent_email;
    }

    /**
     * @param mixed $agent_alternate_email
     */
    public function setAgentAlternateEmail($agent_alternate_email) {
        $this->agent_alternate_email = $agent_alternate_email;
    }

    /**
     * @return mixed
     */
    public function getAgentAlternateEmail() {
        return $this->agent_alternate_email;
    }

    /**
     * @param mixed $agent_email
     */
    public function setAgentEmail($agent_email) {
        $this->agent_email = $agent_email;
    }

    /**
     * @return mixed
     */
    public function getAgentEmail() {
        return $this->agent_email;
    }

    /**
     * @param mixed $agent_id
     */
    public function setAgentId($agent_id) {
        $this->agent_id = $agent_id;
    }

    /**
     * @return mixed
     */
    public function getAgentId() {
        return $this->agent_id;
    }

    /**
     * @param AgentLicenses $agent_licenses
     */
    public function setAgentLicenses(AgentLicenses $agent_licenses) {
        $this->agent_licenses = $agent_licenses;
    }

    /**
     * @return mixed
     */
    public function getAgentLicenses() {
        return $this->agent_licenses;
    }

    /**
     * @param mixed $agent_name
     */
    public function setAgentName($agent_name) {
        $this->agent_name = $agent_name;
    }

    /**
     * @return mixed
     */
    public function getAgentName() {
        return $this->agent_name;
    }

    /**
     * @param mixed $agent_phone
     */
    public function setAgentPhone($agent_phone) {
        $this->agent_phone = $agent_phone;
    }

    /**
     * @return mixed
     */
    public function getAgentPhone() {
        return $this->agent_phone;
    }

    /**
     * @param mixed $agent_picture_url
     */
    public function setAgentPictureUrl($agent_picture_url) {
        $this->agent_picture_url = $agent_picture_url;
    }

    /**
     * @return mixed
     */
    public function getAgentPictureUrl() {
        return $this->agent_picture_url;
    }
} 