<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class AgentLicense extends Element {
    private $number;
    private $category;
    private $state;

    /**
     * @param mixed $agent_license_category
     */
    public function setCategory($agent_license_category) {
        $this->category = $agent_license_category;
    }

    /**
     * @return mixed
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * @param mixed $agent_license_number
     */
    public function setNumber($agent_license_number) {
        $this->number = $agent_license_number;
    }

    /**
     * @return mixed
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * @param mixed $agent_license_state
     */
    public function setState($agent_license_state) {
        $this->state = $agent_license_state;
    }

    /**
     * @return mixed
     */
    public function getState() {
        return $this->state;
    }
} 