<?php
require_once('Element.php');

class Video extends Element {
    private $video_url;
    private $video_caption;
    private $video_description;
    private $video_seq_number;

    /**
     * @param mixed $video_caption
     */
    public function setVideoCaption($video_caption) {
        $this->video_caption = $video_caption;
    }

    /**
     * @return mixed
     */
    public function getVideoCaption() {
        return $this->video_caption;
    }

    /**
     * @param mixed $video_description
     */
    public function setVideoDescription($video_description) {
        $this->video_description = $video_description;
    }

    /**
     * @return mixed
     */
    public function getVideoDescription() {
        return $this->video_description;
    }

    /**
     * @param mixed $video_seq_number
     */
    public function setVideoSeqNumber($video_seq_number) {
        $this->video_seq_number = $video_seq_number;
    }

    /**
     * @return mixed
     */
    public function getVideoSeqNumber() {
        return $this->video_seq_number;
    }

    /**
     * @param mixed $video_url
     */
    public function setVideoUrl($video_url) {
        $this->video_url = $video_url;
    }

    /**
     * @return mixed
     */
    public function getVideoUrl() {
        return $this->video_url;
    }
} 