<?php
require_once('../Element.php');

class Room extends Element {
    private $room_type;
    private $room_size;
    private $room_description;

    /**
     * @param mixed $room_description
     */
    public function setRoomDescription($room_description) {
        $this->room_description = $room_description;
    }

    /**
     * @return mixed
     */
    public function getRoomDescription() {
        return $this->room_description;
    }

    /**
     * @param mixed $room_size
     */
    public function setRoomSize($room_size) {
        $this->room_size = $room_size;
    }

    /**
     * @return mixed
     */
    public function getRoomSize() {
        return $this->room_size;
    }

    /**
     * @param mixed $room_type
     */
    public function setRoomType($room_type) {
        $this->room_type = $room_type;
    }

    /**
     * @return mixed
     */
    public function getRoomType() {
        return $this->room_type;
    }
} 