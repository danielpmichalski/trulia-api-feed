<?php
require_once('Element.php');

class LandingPage extends Element {
    private $lp_url;

    public function __construct($lp_url) {
        $this->lp_url = $lp_url;
    }
}
