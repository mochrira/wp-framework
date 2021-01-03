<?php 

namespace WpFramework;

class Customizer {

    public static function isCustomizer() {
        global $wp_customize;
        return isset($wp_customize);
    }

}

