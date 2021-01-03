<?php 

namespace WpFramework;

if(!class_exists('\\WpFramework\\Customizer')) : 

class Customizer {

    public static function isCustomizer() {
        global $wp_customize;
        return isset($wp_customize);
    }

}

endif;