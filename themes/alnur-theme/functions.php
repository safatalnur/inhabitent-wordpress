<?php

// Add script and stylesheets
function alnur_scripts() {
    $file_ver = date("ymdGis", filemtime( get_stylesheet_directory() . '/style.css'));
    wp_enqueue_style('alnur_style', get_stylesheet_uri(), array(), $file_ver);
    wp_enqueue_script('alnur_js', get_template_directory_uri().'/js/alnur.js', array('jquery'), 1.0, true);
}

add_action('wp_enqueue_scripts', 'alnur_scripts');

?>