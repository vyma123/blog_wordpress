<?php
function load_theme_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), time());
}
add_action('wp_enqueue_scripts', 'load_theme_styles');


function enqueue_external_js() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_external_js');

