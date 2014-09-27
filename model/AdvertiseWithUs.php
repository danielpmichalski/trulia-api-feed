<?php
require_once('Element.php');

class AdvertiseWithUs extends Element {
    private $channel;
    private $featured;
    private $branded;
    private $branded_logo_url;

    /**
     * @param mixed $branded
     */
    public function setBranded($branded) {
        $this->branded = $branded;
    }

    /**
     * @return mixed
     */
    public function getBranded() {
        return $this->branded;
    }

    /**
     * @param mixed $branded_logo_url
     */
    public function setBrandedLogoUrl($branded_logo_url) {
        $this->branded_logo_url = $branded_logo_url;
    }

    /**
     * @return mixed
     */
    public function getBrandedLogoUrl() {
        return $this->branded_logo_url;
    }

    /**
     * @param mixed $channel
     */
    public function setChannel($channel) {
        $this->channel = $channel;
    }

    /**
     * @return mixed
     */
    public function getChannel() {
        return $this->channel;
    }

    /**
     * @param mixed $featured
     */
    public function setFeatured($featured) {
        $this->featured = $featured;
    }

    /**
     * @return mixed
     */
    public function getFeatured() {
        return $this->featured;
    }
} 