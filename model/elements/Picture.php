<?php
include_once(MODEL_ROOT . '/elements/Element.php');

class Picture extends Element {
    private $picture_url;
    private $picture_caption;
    private $picture_description;
    private $picture_seq_number;

    /**
     * @param mixed $picture_caption
     */
    public function setPictureCaption($picture_caption) {
        $this->picture_caption = $picture_caption;
    }

    /**
     * @return mixed
     */
    public function getPictureCaption() {
        return $this->picture_caption;
    }

    /**
     * @param mixed $picture_description
     */
    public function setPictureDescription($picture_description) {
        $this->picture_description = $picture_description;
    }

    /**
     * @return mixed
     */
    public function getPictureDescription() {
        return $this->picture_description;
    }

    /**
     * @param mixed $picture_seq_number
     */
    public function setPictureSeqNumber($picture_seq_number) {
        $this->picture_seq_number = $picture_seq_number;
    }

    /**
     * @return mixed
     */
    public function getPictureSeqNumber() {
        return $this->picture_seq_number;
    }

    /**
     * @param mixed $picture_url
     */
    public function setPictureUrl($picture_url) {
        $this->picture_url = $picture_url;
    }

    /**
     * @return mixed
     */
    public function getPictureUrl() {
        return $this->picture_url;
    }
} 