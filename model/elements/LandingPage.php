<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class LandingPage extends Element {
    private $lp_url;

    public function __construct($lp_url) {
        $this->lp_url = $lp_url;
    }

    /**
     * @return mixed
     */
    public function getLpUrl() {
        return $this->lp_url;
    }

    /**
     * @param mixed $lp_url
     */
    public function setLpUrl($lp_url) {
        $this->lp_url = $lp_url;
    }
}
