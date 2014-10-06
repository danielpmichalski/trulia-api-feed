<?php
define(APP_ROOT, __DIR__);
define(MODEL_ROOT, APP_ROOT . '/model');
include_once(APP_ROOT . '/vendor/3rd-party/smarty/libs/Smarty.class.php');
include_once(MODEL_ROOT . '/Properties.php');

class TruliaFeedBuilder {
    private $smarty;

    public function __construct() {
        $this->initializeEngine();
    }

    public function generateFeed(Properties $properties) {
        $this->smarty->assign('properties', $properties->getAll());
        return $this->smarty->fetch('trulia-properties-v2.5.tpl');
    }

    private function initializeEngine() {
        $this->smarty = new Smarty();
        $this->smarty->addTemplateDir(APP_ROOT . '/templates');
        $this->smarty->setCompileDir('tmp');
    }
}