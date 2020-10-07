<?php 

namespace WpFramework;

class Loader {

    private static $pluginDir;
    private static $plugins;
    private static $defaultPriority;

    public static function setup($config = array()) {
        self::$pluginDir = $config['pluginDir'] ?: __DIR__.'/../../../plugins';
        $plugins = scandir(self::$pluginDir);
        foreach($plugins as $name) {
            if(!in_array($name, array('.', '..'))) {
                $file = self::$pluginDir.'/'.$name.'/'.$name.'.php';
                $data = get_file_data($file, array('Plugin Name', 'Description', 'Priority'));
                self::$plugins[] = [
                    'name' => $name,
                    'file' => $file,
                    'full_name' => $data[0],
                    'description' => $data[1],
                    'priority' => (int)$data[2] ?: self::$defaultPriority
                ];
            }
        }

        usort(self::$plugins, function ($a, $b) {
            return $a['priority'] - $b['priority'];
        });

        foreach(self::$plugins as $plugin) {
            require_once($plugin['file']);
        }
    }

}