<?php 

namespace WpFramework;

class Uri {

    public static function pluginUri($path = '') {
        return get_template_directory_uri().preg_replace('/'.preg_quote(get_template_directory(), '/').'/', '', $path, 1);
    }

}