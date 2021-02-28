<?php

require_once('class-wp-bootstrap-navwalker.php');

/**
 * Include CSS files
 */
function theme_enqueue_scripts() {

	//Css files
	wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
	wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' ); 
	wp_enqueue_style( 'Custom', get_template_directory_uri() . '/css/style.css',array(), null, "all" );


	//Js files

	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), '3.5.1', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '4.0.1', true );
	wp_enqueue_script( 'countup', get_template_directory_uri() . '/js/jquery.counterup.js', array(), '1.0.3', true );	
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




function my_widgets_init() {
	register_sidebar(

		array (
		'name' => __('RK WP Alumina Index Page Sidebar Widget Area'),
		'id' => 'rk_wp_alumina_index_sidebar',
		'description' => __('Widdget area in the sidebar of body of page'),
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '',
		'after_title' => '',
		)

	);


	register_sidebar(

		array (
		'name' => __('RK WP Alumina Recent News'),
		'id' => 'rk_wp_alumina_recent_news_sidebar',
		'description' => __('Widdget area for recent news'),
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h1>',
		'after_title' => '</h1>',
		)

	);
}
add_action('widgets_init', 'my_widgets_init');



// Define a constant path to our single template folder 


define('SINGLE_PATH', TEMPLATEPATH . '/single');  

// Filter the single_template with our custom function 

 

add_filter('single_template', 'my_single_template');  

// Single template function which will choose our template 
 

function my_single_template($single) { 
	
	global $wp_query, $post;  
	
	//Checks for single template by category 
	//Check by category slug and ID 
	
	
	foreach((array)get_the_category() as $cat){
	
		if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php')) 
			return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
			
		elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php')) 
			return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'; 

		}
		
}


//Short code to add recent news sidebar without plugin 

function rk_postsbycategory($category_name = "news") {
// the query
$the_query = new WP_Query( array( 'category_name' => $category_name, 'posts_per_page' => 10 ) ); 
 
// The Loop
if ( $the_query->have_posts() ) {
    $string .= '<ul class="postsbycategory widget_recent_entries">';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
            if ( has_post_thumbnail() ) {
            $string .= '<li>';
            $string .= '<a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_post_thumbnail($post_id, array( 50, 50) ) . get_the_title() .'</a></li>';
            } else { 
            // if no featured image is found
            $string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
            }
            }
    } else {
    // no posts found
}
$string .= '</ul>';
 
return $string;
 
/* Restore original Post Data */
wp_reset_postdata();
}
// Add a shortcode
add_shortcode('categoryposts', 'wpb_postsbycategory');
 
// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');


