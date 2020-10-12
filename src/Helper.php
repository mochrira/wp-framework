<?php 

function is_customizer() {
    global $wp_customize;
    return isset($wp_customize);
}