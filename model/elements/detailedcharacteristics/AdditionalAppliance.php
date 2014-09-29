<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class AdditionalAppliance extends Element {
    private $name;
    private $description;

    /**
     * @param mixed $additional_appliance_description
     */
    public function setDescription($additional_appliance_description) {
        $this->description = $additional_appliance_description;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $additional_appliance_name
     */
    public function setName($additional_appliance_name) {
        $this->name = $additional_appliance_name;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }
} 