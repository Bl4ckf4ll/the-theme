<?php
function the_theme_setup () {
    add_theme_support('post-thumbnails');
    add_image_size('small', 520, 293, true);
    add_image_size('medium', 820, 461, true);
    add_image_size('large', 1280, 720, true);
    add_image_size('extra-large', 1920, 1080, true);

    add_theme_support('sidebar');

	register_sidebar(array(
		'name'          => __( 'Home Sidebar', 'the_theme' ),
		'id'            => 'home-sidebar',
		'description'   => 'Sidebar on the homepage',
		'class'         => 'sidebar col-xs-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));

	register_sidebar(array(
		'name'          => __( 'Home Sidebar Left', 'the_theme' ),
		'id'            => 'home-sidebar-left',
		'description'   => 'Sidebar on the homepage on desktop',
		'class'         => 'sidebar col-xs-12',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));

	register_sidebar(array(
		'name'          => __( 'Post Sidebar', 'the_theme' ),
		'id'            => 'post-sidebar',
		'description'   => 'Sidebar on post sidebar',
		'class'         => 'sidebar col-xs-12',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));
}

add_action('init', 'the_theme_setup');

function the_theme_scripts () {
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    wp_enqueue_script('the-theme-script', get_stylesheet_directory_uri() . '/js/main.js', array('jquery') );
    wp_enqueue_style('the-theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'the_theme_scripts');
