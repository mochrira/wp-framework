<?php 

namespace WpFramework;

if(!class_exists('\\WpFramework\\Template')) : 

class Template {

    public static function getPartContents($slug, $name = null, $args = []) {
        ob_start();
        get_template_part($slug, $name, $args);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}

endif;