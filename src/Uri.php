<?php 

namespace WpFramework;

if(!class_exists('\\WpFramework\\Uri')) :

class Uri {

    public static function pluginUrl($path = '') {
        return get_template_directory_uri().preg_replace('/'.preg_quote(get_template_directory(), '/').'/', '', $path, 1);
    }

}

endif;