<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class Room extends Element {
    private $type;
    private $size;
    private $description;

    /**
     * @param mixed $room_description
     */
    public function setDescription($room_description) {
        $this->description = $room_description;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $room_size
     */
    public function setSize($room_size) {
        $this->size = $room_size;
    }

    /**
     * @return mixed
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * @param mixed $room_type
     */
    public function setType($room_type) {
        $this->type = $room_type;
    }

    /**
     * @return mixed
     */
    public function getType() {
        return $this->type;
    }
} 