<?php
include_once(MODEL_ROOT . '/Properties.php');

interface TruliaFeedBuilder {
    /**
     * @param Properties $properties
     * @return String
     */
    public function generateFeed(Properties $properties);
} 