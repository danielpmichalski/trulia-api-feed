<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class AdvertiseWithUs extends Element {
    private $channel;
    private $featured;
    private $branded;
    private $branded_logo_url;

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
     * @param boolean $featured
     */
    public function setFeatured($featured) {
        $this->featured = $featured;
    }

    /**
     * @return boolean
     */
    public function isFeatured() {
        return $this->featured;
    }

    /**
     * @param boolean $branded
     */
    public function setBranded($branded) {
        $this->branded = $branded;
    }

    /**
     * @return boolean
     */
    public function isBranded() {
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
}