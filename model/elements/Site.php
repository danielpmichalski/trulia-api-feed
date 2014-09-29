<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class Site extends Element {
    private $site_url;
    private $site_name;

    /**
     * @param mixed $site_name
     */
    public function setSiteName($site_name) {
        $this->site_name = $site_name;
    }

    /**
     * @return mixed
     */
    public function getSiteName() {
        return $this->site_name;
    }

    /**
     * @param mixed $site_url
     */
    public function setSiteUrl($site_url) {
        $this->site_url = $site_url;
    }

    /**
     * @return mixed
     */
    public function getSiteUrl() {
        return $this->site_url;
    }
} 