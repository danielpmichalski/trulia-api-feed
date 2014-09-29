<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class Spec extends Element {
    private $is_spec_home;
    private $spec_id;

    /**
     * @param mixed $is_spec_home
     */
    public function setIsSpecHome($is_spec_home) {
        $this->is_spec_home = $is_spec_home;
    }

    /**
     * @return mixed
     */
    public function getIsSpecHome() {
        return $this->is_spec_home;
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