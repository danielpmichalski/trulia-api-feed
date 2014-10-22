<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class Spec extends Element {
    private $spec_home;
    private $spec_id;

    /**
     * @param boolean $spec_home
     */
    public function setSpecHome($spec_home) {
        $this->spec_home = $spec_home;
    }

    /**
     * @return boolean
     */
    public function isSpecHome() {
        return $this->spec_home;
    }

    /**
     * @param mixed $spec_id
     */
    public function setSpecId($spec_id) {
        $this->spec_id = $spec_id;
    }

    /**
     * @return mixed
     */
    public function getSpecId() {
        return $this->spec_id;
    }
} 