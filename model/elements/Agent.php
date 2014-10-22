<?php
include_once(MODEL_ROOT . '/elements/Element.php');
include_once(MODEL_ROOT . '/elements/AgentLicenses.php');
include_once(MODEL_ROOT . '/elements/AgentLicense.php');

class Agent extends Element {
    private $name;
    private $email;
    private $phone;
    private $alternate_email;
    private $picture_url;
    private $id;
    private $licenses;

    public function __construct($agent_name, $agent_email) {
        $this->name = $agent_name;
        $this->email = $agent_email;
    }

    /**
     * @param String $agent_name
     */
    public function setName($agent_name) {
        $this->name = $agent_name;
    }

    /**
     * @return String
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param String $agent_email
     */
    public function setEmail($agent_email) {
        $this->email = $agent_email;
    }

    /**
     * @return String
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param String $agent_phone
     */
    public function setPhone($agent_phone) {
        $this->phone = $agent_phone;
    }

    /**
     * @return String
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * @param String $agent_alternate_email
     */
    public function setAlternateEmail($agent_alternate_email) {
        $this->alternate_email = $agent_alternate_email;
    }

    /**
     * @return String
     */
    public function getAlternateEmail() {
        return $this->alternate_email;
    }

    /**
     * @param String $agent_picture_url
     */
    public function setPictureUrl($agent_picture_url) {
        $this->picture_url = $agent_picture_url;
    }

    /**
     * @return String
     */
    public function getPictureUrl() {
        return $this->picture_url;
    }

    /**
     * @param mixed $agent_id
     */
    public function setId($agent_id) {
        $this->id = $agent_id;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param AgentLicenses $agent_licenses
     */
    public function setLicenses(AgentLicenses $agent_licenses) {
        $this->licenses = $agent_licenses;
    }

    /**
     * @return AgentLicenses
     */
    public function getLicenses() {
        if ($this->licenses == null) {
            $this->licenses = new AgentLicenses(new AgentLicense());
        }
        return $this->licenses->getAll();
    }
} 