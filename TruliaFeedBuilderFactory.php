<?php
define(APP_ROOT, __DIR__);
define(MODEL_ROOT, APP_ROOT . '/model');
include_once(MODEL_ROOT . '/Properties.php');
include_once(APP_ROOT . '/TruliaFeedBuilder.php');
include_once(APP_ROOT . '/TruliaFeedBuilderImpl.php');

class TruliaFeedBuilderFactory {
    private static $builder;

    /**
     * @return TruliaFeedBuilder
     */
    public static function createBuilder() {
        if (self::$builder == null) {
            self::$builder = new TruliaFeedBuilderImpl();
        }
        return self::$builder;
    }
}
