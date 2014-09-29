<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class VirtualTour extends Element {
    private $virtual_tour_url;
    private $virtual_tour_caption;
    private $virtual_tour_description;
    private $virtual_tour_seq_number;

    /**
     * @param mixed $virtual_tour_caption
     */
    public function setVirtualTourCaption($virtual_tour_caption) {
        $this->virtual_tour_caption = $virtual_tour_caption;
    }

    /**
     * @return mixed
     */
    public function getVirtualTourCaption() {
        return $this->virtual_tour_caption;
    }

    /**
     * @param mixed $virtual_tour_description
     */
    public function setVirtualTourDescription($virtual_tour_description) {
        $this->virtual_tour_description = $virtual_tour_description;
    }

    /**
     * @return mixed
     */
    public function getVirtualTourDescription() {
        return $this->virtual_tour_description;
    }

    /**
     * @param mixed $virtual_tour_seq_number
     */
    public function setVirtualTourSeqNumber($virtual_tour_seq_number) {
        $this->virtual_tour_seq_number = $virtual_tour_seq_number;
    }

    /**
     * @return mixed
     */
    public function getVirtualTourSeqNumber() {
        return $this->virtual_tour_seq_number;
    }

    /**
     * @param mixed $virtual_tour_url
     */
    public function setVirtualTourUrl($virtual_tour_url) {
        $this->virtual_tour_url = $virtual_tour_url;
    }

    /**
     * @return mixed
     */
    public function getVirtualTourUrl() {
        return $this->virtual_tour_url;
    }
} 