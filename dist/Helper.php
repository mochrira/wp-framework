<?php 

function is_customizer() {
    global $wp_customize;
    return isset($wp_customize);
}

function get_template_part_content($slug, $name = null, $args = []) {
    ob_start();
    get_template_part($slug, $name, $args);
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}