<?php

require_once('class-wp-bootstrap-navwalker.php');

/**
 * Include CSS files
 */
function theme_enqueue_scripts() {

	//Css files
	wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
	wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' ); 
	wp_enqueue_style( 'Style', get_template_directory_uri() . '/css/style.css' );


	//Js files

	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), '3.5.1', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '4.0.1', true );
	wp_enqueue_script( 'countup', get_template_directory_uri() . '/js/jquery.countup.min.js', array(), '1.0.3', true );	
	wp_enqueue_script( 'Tether', 'https://unpkg.com/@popperjs/core@2"', array(), '1.0.0', true );
	wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	      

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


/**
 * Setup Theme
 */

function rk_wp_alumina_setup(){

	//Add featured image setup

	add_theme_support('post-thumbnails');

	//Add custom Logo to the theme

	$defaults = array(
		'height'      => 130,
		'width'       => 100,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'Theme theme is RK WP Alumina' ),
		'unlink-homepage-logo' => true, 
	);
 	add_theme_support( 'custom-logo', $defaults );


}

add_action('after_setup_theme','rk_wp_alumina_setup');


function register_rk_wp_alumina_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
     )
   );
 }
 add_action( 'init', 'register_rk_wp_alumina_menus' );
