<?php
function the_the_setup () {
    
}

function the_theme_scripts () {
    wp_enqueue_style('the-theme-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'the_theme_scripts');