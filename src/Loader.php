<?php 

namespace WpFramework;

class Loader {

    private static $pluginDir;

    public static function setup($config = array()) {
        self::$pluginDir = $config['pluginDir'] ?: __DIR__.'/../../../plugins';
    }

}