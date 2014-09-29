<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class FloorplanLayout extends Element {
    private $floorplan_layout_url;
    private $floorplan_layout_caption;
    private $floorplan_layout_description;
    private $floorplan_layout_seq_number;

    /**
     * @param mixed $floorplan_layout_caption
     */
    public function setFloorplanLayoutCaption($floorplan_layout_caption) {
        $this->floorplan_layout_caption = $floorplan_layout_caption;
    }

    /**
     * @return mixed
     */
    public function getFloorplanLayoutCaption() {
        return $this->floorplan_layout_caption;
    }

    /**
     * @param mixed $floorplan_layout_description
     */
    public function setFloorplanLayoutDescription($floorplan_layout_description) {
        $this->floorplan_layout_description = $floorplan_layout_description;
    }

    /**
     * @return mixed
     */
    public function getFloorplanLayoutDescription() {
        return $this->floorplan_layout_description;
    }

    /**
     * @param mixed $floorplan_layout_seq_number
     */
    public function setFloorplanLayoutSeqNumber($floorplan_layout_seq_number) {
        $this->floorplan_layout_seq_number = $floorplan_layout_seq_number;
    }

    /**
     * @return mixed
     */
    public function getFloorplanLayoutSeqNumber() {
        return $this->floorplan_layout_seq_number;
    }

    /**
     * @param mixed $floorplan_layout_url
     */
    public function setFloorplanLayoutUrl($floorplan_layout_url) {
        $this->floorplan_layout_url = $floorplan_layout_url;
    }

    /**
     * @return mixed
     */
    public function getFloorplanLayoutUrl() {
        return $this->floorplan_layout_url;
    }
} 